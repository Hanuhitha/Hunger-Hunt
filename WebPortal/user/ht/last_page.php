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
  
if(isset($_POST['submit']))
{
	

$check_in=$_POST['check-in'];

$check_out=$_POST['check-out'];
$no_of_rooms=$_POST['room'];
$price=$_POST['price'];
$type_of_room=$_POST['type'];
$email=$_POST['email'];

$sql="INSERT INTO room(room_id,in_date,out_date,no_of_rooms,price,type_of_room,email) VALUES(NULL,'$check_in','$check_out','$no_of_rooms','$price','$type_of_room','$email')";

if($con->query($sql)==TRUE)
{
	//echo "<script>alert('Press OK for image upload');</script>";
	//echo "<script>
//window.location = 'upload_img.php';
//</script>";
	

//echo "<script>alert('You are Registered Successfully THANKYOU');</script>";
//echo <a href='upload_img.php'>
//echo "inserted";
//echo "<br>";
	


    
}
else
{
	echo "not inserted".$con->error;
	}
if($type_of_room=="standard")
{
$sql1="UPDATE hotel SET standard=standard -'$no_of_rooms' WHERE email='$email'";
}
if($type_of_room=="deluxe")
{
$sql1="UPDATE hotel SET deluxe=deluxe -'$no_of_rooms' WHERE email='$email'";
}
if($type_of_room=="quad")
{
$sql1="UPDATE hotel SET quad=quad -'$no_of_rooms' WHERE email='$email'";
}
if($type_of_room=="suite")
{
$sql1="UPDATE hotel SET suite=suite -'$no_of_rooms' WHERE email='$email'";
}


if($con->query($sql1)==TRUE)
{
    //echo "Record updated successfully";

    //$con=mysql_connect("localhost","root","");
    //mysql_select_db("hotelbooking");
  $db=new mysqli('localhost','root','','hotelbooking');

    $sql4="DELETE FROM temp_hotel";
  $all_row1=$db->query($sql4);

    if($all_row1)
    {
    echo "<script>alert('Press OK to continue');</script>";
	echo "<script>
window.location = 'index.php';
</script>";
} }
else {
    echo "Error updating record: " . mysqli_error($conn);
}

}
?>