<?php


$errname="";
$errurl="";
$erremail="";
$errmob="";

$errcpass="";
$errstd="";
$errsp="";
$errdel="";
$errdp="";
$errqd="";
$errqp="";
$errsu="";
$errsup="";
$errtt="";


if(isset($_POST['submit']))
{
 if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["name"]) === 0){
      $errname = "Please enter your full name";	
	
	if(preg_match("/^\d{3}-\d{7}$/", $_POST["mobileno"]) === 0){
      $errmob = "enter a valid mobile no";
	  
	 if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$erremail = "enter a valid UserEmail";
	

if($_POST["password"] == $_POST["cpassword"]){
	//$msg = $cpassword; 
	$errcpass='password matched';
//$d= "invalid cpassword";	
if(preg_match( "/^(http|https):\\/\\/[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i",$_POST["urll"])===0)
{
  $errurl =" enter a valid url";
  
  if (preg_match("/^[0-9]*$/", $_POST["std_room"])===0 ) {
	  
	  $errstd="enter in numbers";
	  
	  if (preg_match("/^[0-9]*$/", $_POST["std_room_pri"])=== 0) {
		  $errsp="enter in numbers";
		  
		  if (preg_match("/^[0-9]*$/", $_POST["deluxe_room"])=== 0) {
			 
			  $errdel="enter in numbers";
			  if (preg_match("/^[0-9]*$/",$_POST["deluxe_room_pri"])===0) {
				 $errdp="enter in numbers";
				  
				  if (preg_match("/^[0-9]*$/",$_POST["suite_room"])===0) {
					  $errsu="enter in numbers";
					  if (preg_match("/^[0-9]*$/",$_POST["suite_room_pri"])===0) {
						  $errsp="enter in numbers";
						  if (preg_match("/^[0-9]*$/", $_POST["quad_room"])===0) {
							   $errqd="enter in numbers";
							  if (preg_match("/^[0-9]*$/", $_POST["quad_room_pri"])===0) {
	 $errqp="enter in numbers";
	 
	 if (preg_match("/^[0-9]*$/", $_POST["ttable"])===0) {
	 $errtt="enter in numbers";
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


$hotel_name=$_POST['name'];
$type_of_hotel=$_POST['htype'];
$state=$_POST['state'];
$city=$_POST['city'];
$address=$_POST['address'];
$pincode=$_POST['pin'];
$map=$_POST['map'];
$free_cancellation=$_POST['fc'];
$pay_at_hotel=$_POST['payh'];
$free_wifi=$_POST['wifih'];
$free_cab=$_POST['th'];
$gym=$_POST['gymh'];
$swimming_pool=$_POST['poolh'];
$cafe=$_POST['cafeh'];

$parking=$_POST['ph'];
$airport=$_POST['airport'];
$railway=$_POST['railway'];
$bus_stop=$_POST['bus'];
$hospital=$_POST['hospitals'];
$standard=$_POST['std_room'];
$deluxe=$_POST['deluxe_room'];
$suite=$_POST['suite_room'];
$quad=$_POST['quad_room'];
$no_of_tables=$_POST['ttable'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];
$mobile=$_POST['mobileno'];
$website=$_POST['urll'];

$standardprice=$_POST['std_room_pri'];
$deluxeprice=$_POST['deluxe_room_pri'];
$quadprice=$_POST['quad_room_pri'];
$suiteprice=$_POST['suite_room_pri'];
$img = $_FILES['img'];

$ins ="INSERT INTO hotel(hotel_id,hotel_name,state,city,address,pincode,map,free_cancellation,pay_at_hotel,free_wifi,free_cab,gym,swimming_pool,cafe,parking,airport,railway,hospital,bus_stop,type_of_hotel,standard,deluxe,suite,quad,no_of_tables,password,cpassword,email,mobile,website,standardprice,deluxeprice,quadprice,suiteprice) VALUES
('$hotel_id','$hotel_name','$state','$city','$address','$pincode','$map','$free_cancellation','$pay_at_hotel','$free_wifi','$free_cab','$gym','$swimming_pool','$cafe',
'$parking','$airport','$railway','$hospital','$bus_stop','$type_of_hotel','$standard','$deluxe','$suite','$quad','$no_of_tables','$password','$cpassword','$email',
'$mobile','$website','$standardprice','$deluxeprice','$quadprice','$suiteprice')";

if($con->query($ins)==TRUE)
{
	echo "<script>alert('Press OK for image upload');</script>";
	echo "<script>
window.location = 'upload_img.php';
</script>";
	

//echo "<script>alert('You are Registered Successfully THANKYOU');
 //echo <a href='upload_img.php'>;
//echo "inserted";
//echo "<br>";
    
}
else
{
	echo "not inserted".$con->error;
	}


}else{ echo "not a valid  no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid  no";}
}else{ echo "not a valid  no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid url";}
}else{ echo "password doesnt match";}
}else { echo "not a valid email id";}
}else { echo "not a valid mobile number";}
}else { echo "not a valid username";}

}	
?>