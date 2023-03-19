<?php 
session_start();
$c=$_SESSION['cc'];
$_SESSION['dd']=$c;
?>
<?php

if(isset($_POST['search']))
{

$value=$_POST['valueToSearch'];

$query=" SELECT * FROM `bus` WHERE CONCAT(`bus_id`, `journey_date`, `travels`, `source`, `destination`, `type`, `depart_time`, `arrival_time`, `seats`)LIKE'%".$value."%' ";
$search_result=filterTable($query);

}

else
{

$query="  SELECT * FROM `bus`";
$search_result=filterTable($query);


}
function filterTable($query)
{

$connect=mysqli_connect("localhost","root","","reservation");

$filter_Result=mysqli_query($connect,$query);
return $filter_Result;

}

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
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 10px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}


</style>
</head>

<body>
<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
			
<a class="navbar-brand" href="#">Hello <?php echo $c;?></a>
				<div class="logo">

					<h1><a  href="index.php"><span>BUS RESERVATION SYSTEM &nbsp</span></a></h1>


				</div>
 
<a class="navbar-brand" href="b.php">Logout</a>	
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
	

<form action="oneway.php" method="post">
<center>
<h3 style="color:brown;" ><b>Select The Travels For Booking The Seats</b> </h3><br>

<input type="text" name="valueToSearch" placeholder="Enter Travels Name"><br><br>

<input type="submit" name="search" value="filter"><br><br>
</center>
<table>
<Tr class="success">
		
<th>Bus Id</th>
		<th colspan="2">Journey_Date</th>
		<th colspan="2">Travels</th>

		<th colspan="2">Source</th>
                <th colspan="2">Destination</th>
		<th>BusType</th>
		<th colspan="2">Depart_Time</th>
                 <th colspan="2">Arrival_Time</th>
		<th colspan="2">Seats</th>
<th>Price</th>
		<th>Book</th>



	</Tr>
	

<?php 



while($row=mysqli_fetch_array($search_result)):?>

<tr>

<td><?php echo $row['bus_id'];?></td>
<?php $a=$row['bus_id'];?>
<td><span class="glyphicon glyphicon-calendar"></span><?php echo $row['journey_date'];?></td>
<?php $b=$row['journey_date'];?>
<td></td>


<td><span class="glyphicon glyphicon-road"></span><?php echo $row['travels'];?></td>
<?php $c=$row['travels'];?>
<td></td>
<td><span class="glyphicon glyphicon-arrow-right"></span><?php echo $row['source'];?></td>
<?php $d=$row['source'];?>
<td></td>
<td><span class="glyphicon glyphicon-arrow-right"></span><?php echo $row['destination'];?></td>
<?php $e=$row['destination'];?>
<td></td>
<td><?php echo $row['type'];?></td>
<?php $f=$row['type'];?>

<td><span class="glyphicon glyphicon-time"></span><?php echo $row['depart_time'];?></td>
<?php $g=$row['depart_time'];?>
<td></td>
<td><span class="glyphicon glyphicon-time"></span><?php echo $row['arrival_time'];?></td>
<?php $h=$row['arrival_time'];?>
<td></td>
<td><span class="glyphicon glyphicon-bed"></span><?php echo $row['seats'];?></td>
<?php $i=$row['seats'];?>
<td></td>
<td><span class="glyphicon glyphicon-cost"></span><?php echo $row['price'];?></td>
<?php $j=$row['price'];?>
<?php
if($row['travels']=="SK")
{
?>
<td><a href="skseats.php"><span class="glyphicon glyphicon-log-in"></span> Book SK</a></td>
<?php
}?>

<?php
if($row['travels']=="KPN")
{
?>
<td><a href="kpnseats.php"><span class="glyphicon glyphicon-log-in"></span> Book KPN</a></td>
<?php
}?>

<?php
if($row['travels']=="Garuda")
{
?>
<td><a href="garudaseats.php"><span class="glyphicon glyphicon-log-in"></span> Book Garuda</a></td>
<?php
}?>




</tr>
<?php endwhile;?>
<?php


$connect=mysqli_connect("localhost","root","","reservation");
$sqq="truncate tbook";
$qu=mysqli_query($connect,$sqq);

$qu="insert into tbook(`bus_id`, `journey_date`, `travels`, `source`, `destination`, `type`, `depart_time`, `arrival_time`, `seats`, `price`) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
$qqq=mysqli_query($connect,$qu);
return $qqq;
?>

</table>

</form>

</body>
</html>

