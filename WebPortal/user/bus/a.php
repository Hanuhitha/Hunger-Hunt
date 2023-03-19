<?php 
session_start();
unset($_SESSION['aa']);
header('location:../index.php');
?>
