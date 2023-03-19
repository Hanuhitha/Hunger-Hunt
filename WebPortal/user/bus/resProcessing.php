<?php
//**** START Database connection script
include ("connection.php");
//**** END Database connection script

//**** START Create numbered seat buttons
if (isset($_POST['getSeatBtns'])){
	// Initialize our list
	$spots = "";
	//Clean incoming POST
	$tid = preg_replace('#[^0-9]#', '/', $_POST['getSeatBtns']);
	if($tid == ""){
		exit();
	}
	// Build our query and run it
	$sql = "SELECT * FROM tbook WHERE bus_id='$tid'";
	$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	$quick_check = mysqli_num_rows($query);
	if ($quick_check != 0){
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
$id = $row['bus_id'];
		$date = $row['journey_date'];
$travels=$row['travels'];
$source=$row['source'];
$destination=$row['destination'];
$type=$row['type'];
$depart_time=$row['depart_time'];
$arrival_time=$row['arrival_time'];
		$avail = $row['seats'];
		$price = $row['price'];
		
			$spots .= "<hr>";
			$v = "seats";
			if ($avail == 1){$v = "seat";}
			$stBtn = "";
			$spots .= $travels.' now has '.$avail.'&nbsp;'.$v.' available - '.$price.' per seat<br />';
			$spots .= "Click number of seats you want to reserve, will be held for 3 minutes once you click.<br />";
			for ($k = 0 ; $k < $avail; $k++){
				$k2 = $k+1;
				$stBtn .= '<button id="tbid_'.$id.'_'.$k2.'" onClick="resserveSeats(this.id)">'.$k2.'</button>';
			}
                         

			$spots .= "$stBtn<br />";
		}
	} else {$spots .= "Sorry, someone just reserved those";}
	
	// Return our list to ajax
	echo $spots;
	exit();
}
//**** END Create numbered seat buttons

//**** START reserving number of seats
if (isset($_POST['reserve'])){
	// Initialize our list
	$spots = "";
	//Clean incoming POST
	$tid = preg_replace('#[^0-9]#', '', $_POST['reserve']);
	$num = preg_replace('#[^0-9]#', '', $_POST['num']);
	if($tid == "" || $num == ""){
		exit();
	}
	// Build our query and run it
	$sql = "SELECT * FROM tbook WHERE bus_id='$tid' AND seats >='$num'";
	$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	$quick_check = mysqli_num_rows($query);
	if ($quick_check != 0){
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
$id = $row['bus_id'];
		$date = $row['journey_date'];
$travels=$row['travels'];
$source=$row['source'];
$destination=$row['destination'];
$type=$row['type'];
$depart_time=$row['depart_time'];
$arrival_time=$row['arrival_time'];
		$avail = $row['seats'];
		$price = $row['price'];

			$spots .= "<hr>";
			$v = "seats";
			if ($num == 1){$v = "seat";}


			$spots .= 'You just reserved '.$num.' '.$v.' at travels '.$travels.'<br />';
$pay=$price*$num;
$spots .= 'Total cost '.$pay.'<br />';

			
		}
		$availNow = $avail - $num;

		$sql = "UPDATE bus SET seats='$availNow' WHERE bus_id='$id' LIMIT 1";
		$query = mysqli_query($conn, $sql);

		$sql = "INSERT INTO reserves(travels,seats,restime,price) VALUES ('$travels','$num',now(),$price)";
		$query = mysqli_query($conn, $sql);
		$reserveID = mysqli_insert_id($conn);
		////////ppppppppppppppppppppp////////////

$sqa="truncate tplace";
$qu=mysqli_query($conn,$sqa);
		
$sql3 = "INSERT INTO tplace(travels,source,destination,depart_time) VALUES ('$travels','$source','$destination','$depart_time')";
		$query = mysqli_query($conn, $sql3);
		$spots .= '<form name="confirmform" id="confirmform" onSubmit="return false;">';



		$spots .= '<input id="travels" type="hidden" value="'.$travels.'">';
		$spots .= '<input id="seats" type="hidden" value="'.$num.'">';
		$spots .= '<input id="reserveID" type="hidden" value="'.$reserveID.'">';
		$spots .= '<button id="confirmbtn" onClick="confirmSeats()">Buy Seats</button><br />';
 		$spots .= '</form>';
		
	} else {$spots .= "Sorry, someone just reserved those. Try another table";}	
	// Return our list to ajax
	echo $spots;
	exit();
}
//**** END reserving number of seats

//**** START register/buy seats
if (isset($_POST['confirm'])){

	// Initialize our response
	$response = "";
	//Clean incoming POST
	$rid = preg_replace('#[^0-9]#', '/', $_POST['confirm']);
	$travels = preg_replace('#[^a-z0-9 ]#i', '/', $_POST['tn']);
	$seats = preg_replace('#[^0-9]#', '/', $_POST['ns']);
	
	if($rid == "" ||  $travels== "" || $seats == ""){
		exit();
	}
	// See if reservation has timed out
	$sql = "SELECT id FROM reserves WHERE id='$rid' LIMIT 1";
	$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	$quick_check = mysqli_num_rows($query);
	//If timed out, make sure those seats are still available
	if ($quick_check != 1){
		$sql = "SELECT bus_id, seats FROM bus WHERE travels='$travels' AND seats>='$seats' LIMIT 1";
		$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));
		$quick_check2 = mysqli_num_rows($query);
		// Not available any longer
		if ($quick_check2 == 0){
			$response = "Your reservation expired, please start over by refreshing page";
			echo $response;
			exit();
		} else {
			while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$id = $row['bus_id'];
				$avail = $row['seats'];
			}
			$availNow = $avail - $seats;
			$sql = "UPDATE bus SET seats='$availNow' WHERE bus_id='$id' LIMIT 1";
			$query = mysqli_query($conn, $sql);
			$sql = "INSERT INTO confirms(travels,seats,person) VALUES ('$travels','$seats')";
			$query = mysqli_query($conn, $sql);
			$response = 'Your reservation has been made for '.$seats.' seat(s) at travels '.$travels;
			echo $response;
			exit();									
		}
	} else {
		$sql = "INSERT INTO confirms(travels,seats,person,email) VALUES ('$travels','$seats')";
		$query = mysqli_query($conn, $sql);
		
		$sql = "DELETE FROM reserves WHERE id='$rid' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		
		$response = 'Your reservation has been made for '.$seats.' seat(s) at travels '.$travels.'<br><br>';
		echo $response;
if($travels=='KPN')
{
$response='<a href="KPN.php">select seats</a>';
echo $response;
}
else if($travels=='SK') 
{
$response='<a href="SK.php">select seats</a>';
echo $response;
}
else if($travels=='Garuda') 
{
$response='<a href="garuda.php">select seats</a>';
echo $response;
}
$sq="truncate tbook";
$qu=mysqli_query($conn,$sq);


		exit();
	}

}
//**** END register/buy seats
?>
