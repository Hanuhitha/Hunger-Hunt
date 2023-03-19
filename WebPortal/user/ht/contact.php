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
	 echo "connected";

  }
	if(isset($_POST['send'])){
$name=$_POST['name'];
$message=$_POST['message'];

$email=$_POST['email'];
$mobile=$_POST['mobileno'];

$ins= "INSERT INTO contact(name,email,mobile_no,message) VALUES ('$name','$email','$mobile','$message')";

 if($con->query($ins)==TRUE)
{
	echo "<script>alert('You are Registered Successfully THANKYOU');</script>";
	echo "<script>
window.location = 'index.php';
</script>";
	
    
}
else
{
	echo "not inserted".$con->error;
	
}
}	
mysqli_close($con);
?>