<?php
session_start();
$d=$_SESSION['dd'];
$_SESSION['ee']=$d;
?>
<?php

//**** START Database connection script
include ("connection.php");
$clean = "SELECT r.*, a.seats
		  FROM reserves AS r
		  LEFT JOIN bus AS a ON a.seats = r.seats
		  WHERE r.restime < (NOW() - INTERVAL 3 MINUTE)";
$freequery = mysqli_query($conn, $clean) or die (mysqli_error($conn));
$num_check = mysqli_num_rows($freequery);
if ($num_check != 0){
	while ($row = mysqli_fetch_array($freequery, MYSQLI_ASSOC)){
		$dI = $row['travels'];
		$dS = $row['seats'];
		$dIdRow = $row['id'];
		$originalavail = $row['seats'];
		$updateAvailable = $originalavail + $dS;
			
		$sql3 = "DELETE FROM reserves WHERE travels='$dI' LIMIT 1";
		$query3 = mysqli_query($conn, $sql3);
		$sql3 = "UPDATE bus SET seats='$updateAvailable' WHERE travels='$dI' LIMIT 1";
		$query3 = mysqli_query($conn, $sql3);
	}
}
//**** END Clean out expired reservations

$spots = "";
$sql="SELECT * FROM `tbook`WHERE  seats>1";
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
		$v = "seats";
		if ($avail == 1){$v = "seat";}
		$spots .= $travels.' has '.$avail.'&nbsp;'.$v.' available - '.$price.' per seat';
$spots.='--------------------->';
		$tblBtn = '<button id="tbid_'.$id.'" onClick="showSeats(this.id)">Get seats</button>';
		$spots .= '&nbsp;&nbsp;&nbsp;'.$tblBtn.'<br />';
$spots.='<br>';

	}
} else {$spots = "None Available";}
//**** END Get initial state of tables with seats after clean up
?>
<!DOCTYPE html>
<html>
<head>
<script>
//**** START get buttons for availble seats
function showSeats(tbl){
	var a = tbl.split("_");
	document.getElementById("seatBtns").innerHTML = 'Double Checking Availability ...';
	
	// For in depth of following code
	// visit http://www.developphp.com/view.php?tid=1185
    var hr = new XMLHttpRequest();
	var url = "resProcessing.php";
	hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("seatBtns").innerHTML = return_data;
	    }
    }
    hr.send("getSeatBtns="+a[1]);
}
//**** END get buttons for availble seats

//**** START reserve number of seats
function resserveSeats(numseats){
	// Split our data at the _
	var a = numseats.split("_");
	// Add text while request processes
	document.getElementById("buyNow").innerHTML = 'Double Checking Availability ...';
	
	// For in depth of following code
	// visit http://www.developphp.com/view.php?tid=1185
    var hr = new XMLHttpRequest();
	var url = "resProcessing.php";
	hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("buyNow").innerHTML = return_data;
	    }
    }
    hr.send("reserve="+a[1]+"&num="+a[2]);
}
//**** END reserve number of seats

//**** START register/buy seats
function confirmSeats(){
	
	var tnum = document.getElementById("travels").value;
	var nseats = document.getElementById("seats").value;
	var rid = document.getElementById("reserveID").value;
	var confData = "confirm="+rid+"&tn="+tnum+"&ns="+nseats;

	document.getElementById("confirmation").innerHTML = 'Triple Checking Availability ...';
	
	// For in depth of following code
	// visit http://www.developphp.com/view.php?tid=1185
    var hr = new XMLHttpRequest();
	var url = "resProcessing.php";
	hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("confirmation").innerHTML = return_data;
	    }
    }
    hr.send(confData);
}
//**** END register/buy seats







</script>

<title>Bus Reservation System</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
</head>


<body bgcolor="red">
<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
			
				
<a class="navbar-brand" href="#">Hello <?php echo $d;?></a>
				<div class="logo">

					<h1><a  href="index.php"><span>BUS RESERVATION SYSTEM &nbsp</span></a></h1>


				</div>
 
<a class="navbar-brand" href="c.php">Logout</a>
 
	<div class="header-dropdown">
					<div class="emergency-grid">
						<ul>
							<li>Toll Free : </li>
							<li class="call"> 1800 - 419 - 4287</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
 <li><a href="index.php">Ticket Booking</a></li>
 <li><a href="#">About Us</a></li>
 <li ><a href="#">Contact Us</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Bus Routes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Hyderabad to Bangalore</a></li>
          <li><a href="#">Pune to Bangalore</a></li>
          <li><a href="#">Hyderadab to Chennai</a></li>
<li><a href="#">Coimbatore to Bangalore</a></li>
<li><a href="#">Chennai to Madurai</a></li>
<li><a href="#">More Routes>></a></li>
        </ul>
      </li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Cities<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Hyderabad</a></li>
          <li><a href="#">Bangalore</a></li>
          <li><a href="#">Chennai</a></li>
<li><a href="#">Pune </a></li>
<li><a href="#">Cities>></a></li>
        </ul>
      </li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Bus Operators<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">SRS Travels</a></li>
          <li><a href="#">KPN Travels</a></li>
          <li><a href="#">SRM Transport</a></li>
 <li><a href="#">VRL Travels</a></li>
          <li><a href="#">Morning StarTravels</a></li>
 <li><a href="#">Kallada Travels</a></li>
          <li><a href="#">More Operators>></a></li>
        </ul>
      </li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top RTC's<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">APSRTC</a></li>
          <li><a href="#">MSRTC</a></li>
          <li><a href="#">HRTC</a></li>
 <li><a href="#">UPSRTC</a></li>
                    <li><a href="#">RTCs>></a></li>
        </ul>
      </li>
    
    </ul>
  </div>
</nav>
  
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>



				
			</div>
		</div>
	</div>
	


<div><?php echo $spots;?></div>
<div id="seatBtns"></div>
<div id="buyNow"></div>
<div id="confirmation"></div>
<div id="seat"></div>







</body>
</html>
