
<?php
session_start();
$e=$_SESSION['ee'];
$_SESSION['ff']=$e;
?>

<html>
<head>
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

<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />

<style>



</style>
</head>

<body background="images/b.jpg">
<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
			
<a class="navbar-brand" href="#">Hello <?php echo $e;?></a>
				<div class="logo">

					<h1><a  href="index.php"><span>BUS RESERVATION SYSTEM &nbsp</span></a></h1>


				</div>
 
<a class="navbar-brand" href="d.php">Logout</a>	<div class="header-dropdown">
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
	

<form action="" method="post">


<?php 
echo"<center>";
$conn=mysqli_connect("localhost","root","","reservation");
$sql = "SELECT * FROM `garuda`where seat_no LIKE'A%' ";
$result = mysqli_query($conn, $sql)or die('wrong');
echo"<table cellspacing='10' cellpadding='10'>";
echo"<tr>";
echo"<td> Driver<input type='checkbox'  value='a' disabled></td>";
while ($row = mysqli_fetch_array ($result)){
$sn=$row['seat_no'];
$status=$row['status'];
echo"<center>";
if($row['status']==0)
{
echo'<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'."<input type='checkbox' name= 'seat[]' value=$sn size=10>". $row ['seat_no'].'</td>'; 
}
else
{
echo'<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row ['seat_no'].'</td>';
}



}

?>
<?php 


$sql1 = "SELECT * FROM `garuda`where seat_no LIKE'B%' ";
$result1 = mysqli_query($conn, $sql1)or die('wrong');
echo"<tr>";
echo"<td>  </td>";
while ($row = mysqli_fetch_array ($result1)){
$sn=$row['seat_no'];
$status=$row['status'];
echo"<center>";
if($row['status']==0)
{
echo'<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'."<input type='checkbox' name= 'seat[]' value=$sn size=10>". $row ['seat_no'].'<br><br></td>'; 
}
else
{
echo'<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row ['seat_no'].'<br><br></td>';
}



}

?>

<?php 

$conn=mysqli_connect("localhost","root","","reservation");
$sql2 = "SELECT * FROM `garuda`where seat_no LIKE'C%' ";
$result2 = mysqli_query($conn, $sql2)or die('wrong');

echo"<tr>";
echo"<td>  </td>";
while ($row = mysqli_fetch_array ($result2)){
$sn=$row['seat_no'];
$status=$row['status'];
echo"<center>";
if($row['status']==0)
{
echo'<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'."<input type='checkbox' name= 'seat[]' value=$sn size=10>". $row ['seat_no'].'</td>'; 
}
else
{
echo'<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row ['seat_no'].'</td>';
}


}

?>
<br><br>
<?php 

$conn=mysqli_connect("localhost","root","","reservation");
$sql3 = "SELECT * FROM `garuda`where seat_no LIKE'D%' ";
$result3 = mysqli_query($conn, $sql3)or die('wrong');

echo"<tr>";
echo"<td> </td>";
while ($row = mysqli_fetch_array ($result3)){
$sn=$row['seat_no'];
$status=$row['status'];
echo"<center>";
if($row['status']==0)
{
echo'<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'."<input type='checkbox' name= 'seat[]' value=$sn size=10>". $row ['seat_no'].'</td>'; 

}
else
{
echo'<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row ['seat_no'].'</td>';
}


echo"</center>";
}

?>






<table>
<Tr class="success">
		
		<th>Seat No</th>
		<th>Passenger Name</th>
		<th>Age</th>
                <th>Gender</th>
	</Tr>
	

<br><br>
<?php
// This PHP script will only run on post back from submit




if(isset($_POST['book'])){
    if(!empty($_POST['seat'])){
         //loop to retrieve checked values
        foreach($_POST['seat'] as $selected){

$k=$selected 

?>
<tr>
<td><input type="text"name="seat"value="<?php echo $k;?>"></td>


<td><input type="text" name="name" ></td>
<td><input type="text" name="age" ></td>
<td><input type="text" name="gender" ></td>

</tr>

<?php
}
}
}
else if(isset($_POST['confirm']))
{
require("connection.php");

$sq1="truncate tseats";
$qu=mysqli_query($conn,$sq1);
$kk=$_POST["seat"];
$n=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$status=0;
        // loop to retrieve checked values
        

$query="update seats set name ='$n',age =$age,gender='$gender',status=1 where seat_no='$kk'";
mysqli_query($conn,$query);
$query2="insert into tseats(id,seat_no,name,age,gender,status) values('','$kk','$n','$age','$gender','$status')";
mysqli_query($conn,$query2);
 

}

?>

</table><br>
<br>
<input type="submit" name="book" value="Book">
<input type="submit" name="confirm" value="confirm">
<a href="payment/pay.php">NEXT</a>
</form>
</body>
</html>
