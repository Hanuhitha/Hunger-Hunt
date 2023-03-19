<?php

$connect=mysqli_connect("localhost","root","","reservation");
$sqq="truncate tbook";
$qu=mysqli_query($connect,$sqq);

$q1=mysqli_query($connect,"SELECT * FROM `bus` WHERE bus_id='15' ");
$rr=mysqli_num_rows($q1);

while($row=mysqli_fetch_assoc($q1))
{
		$a = $row['bus_id'];
		$b = $row['journey_date'];
$c=$row['travels'];
$d=$row['source'];
$e=$row['destination'];
$f=$row['type'];
$g=$row['depart_time'];
$h=$row['arrival_time'];
		$i = $row['seats'];
		$j= $row['price'];
	}	


$qu="insert into tbook(`bus_id`, `journey_date`, `travels`, `source`, `destination`, `type`, `depart_time`, `arrival_time`, `seats`, `price`) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
$qqq=mysqli_query($connect,$qu);


	







?>
<?php
header('Location:book.php');
exit();
?>
