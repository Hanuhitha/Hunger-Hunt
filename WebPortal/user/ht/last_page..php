<?php
//include_once 'connect.php';   
$host = "localhost";
$user="root";
$pass="";
$db="hotelbooking";
$con=new mysqli($host,$user,$pass,$db);
// Check connection
if (mysqli_connect_error())
  {
  echo  mysqli_connect_error();
  }
  else{
	 // echo "connected";

  }
if(isset($_POST['submit']))
{
	

$check_in=$_POST['check-in'];

$check_out=$_POST['check-out'];
$no_of_rooms=$_POST['room'];
$price=$_POST['hidden'];
$type_of_room=$_POST['type'];
$email=$_POST['email'];
echo $email;
?>