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
	

//echo "<script>alert('You are Registered Successfully THANKYOU');</script>";
//echo <a href='upload_img.php'>
//echo "inserted";
//echo "<br>";


    
}
else
{
	echo "not inserted".$con->error;
	}




}	
