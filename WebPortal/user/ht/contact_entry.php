
<?
 if(isset($_POST['send'])){
$name=$_POST_['name'];
$message=$_POST_['message'];

$email=$_POST['email'];
$mobile=$_POST['mobileno'];

$ins= "INSERT INTO contact( name,email,message,mobile_no) VALUES ('name','email','message','mobile')";

 }
 
 ?>