<html>
<body><?php
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
	  echo "connected";

  }
 if(isset($_POST['signup'])){
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$email=$_POST['email'];
$mobile=$_POST['mobileno'];

$ins= "INSERT INTO usign( username,email,password,cpassword,mobilno) VALUES ('$username','$email','$password','$cpassword','$mobile')";

if($con->query($ins)==TRUE)
{
	echo "<script>alert('You are Registered Successfully THANKYOU');</script>";
	//echo "<script>window.location = 'index.php';</script>";
	
    
}
else
{
	echo "not inserted".$con->error;
	
}
}	
mysqli_close($con);
 
 ?></body></html>