<?php 
session_start();
unset($_SESSION['cc']);
header('location:../index.php');
?>
