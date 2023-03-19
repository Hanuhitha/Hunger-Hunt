<?php
	require('../connection.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
		$que=mysqli_query($conn,"select * from admin where user='$n' and pass='$e'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['admin']=$n;
				header('location:aindex.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}

	}

?>
