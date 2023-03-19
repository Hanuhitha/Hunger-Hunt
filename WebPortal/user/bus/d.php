<?php 
session_start();
unset($_SESSION['ee']);
header('location:../index.php');
?>
