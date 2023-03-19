<?php
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
	  echo "connected";

  }
 // if(isset($_POST['login'])=='login')
 if(isset($_POST['login']))
  {
	 // $uname=$_POST['email'];
	  //$pass=$_POST['password'];
	  //$choose=$_POST['select_user'];
	  session_start();
	 $_SESSION['email']=$_POST['email'];
	$_SESSION['password']=$_POST['password'];
	  $_SESSION['select_user']=$_POST['select_user'];
	  switch($_SESSION['select_user']==true)
	  {
		  case "user":
		  {
			 
		 // header('location:index.php');
		  	    $sql = "SELECT * FROM usign where email ='" . $_POST['email'] . "' AND password = '" .$_POST['password'] ."'";
		        $v=$con->query($sql);

				if($con->query($sql)==TRUE)
                {
	              //echo "query executed user";

	              echo "<script>alert('You are logged in as a Successfull user THANKYOU');</script>";
	           echo "<script>window.location = 'index.php'  ;
			   </script>";
			    echo $_SESSION["name"];
                }

				else
                 {
	               echo "error selecting";
                 }

				if($v->num_rows>0)
                {
	              while($row=$v->fetch_assoc())
	               {
                   $_SESSION['username'] = $row['username'];
                   echo 'correct';
		            /* if($uname == $row['username'])
		             {
			            if($pass == $row['password'])
			             {
				           echo "correct";

			             }

	                }
	                 */
                }
		             }
		             else
		             {
			           echo "no data found";
		             }
         break;
	  }

   case "admin" :
    {
   $sq = "SELECT * FROM hotel where username ='" . $_POST['email'] . "' AND password = '" .$_POST['password'] ."'";
		$va=$con->query($sq);
	  if($con->query($sq)==TRUE)
{
	echo "present inside the hotel";

	//echo "<script>alert('You are Registered Successfully user THANKYOU');</script>";
	//echo "<script>window.location = 'index.php';</script>";
}
else{
	echo "not selected hotel";
}
if($va->num_rows>0)
{
	echo "inside the hotel if";
	while($row=$va->fetch_assoc())
	{

      $_SESSION['username'] = $row['username'];
    echo "<script>alert('You are Registered Successfully user THANKYOU');</script>";
          echo "<script>window.location = 'index.php';</script>";

/*
  	if($uname == $row['email'])
		{
			if($pass == $row['password'])
			{
				//echo "correct";
				echo "<script>alert('You are Registered Successfully user THANKYOU');</script>";
	            echo "<script>window.location = 'index.php';</script>";
			}


		}
    */

	}


}
else
{
	echo "no data";
}
break;

	  }
	}
}
mysqli_close($con);

  ?>
