<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from bus where bus_id='$nid'");

header('location:aindex.php?page=amanagebus');

?>
