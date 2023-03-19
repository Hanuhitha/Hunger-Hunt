<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from user where id='$nid'");

header('location:aindex.php?page=amanage_users');

?>
