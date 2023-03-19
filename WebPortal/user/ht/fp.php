<html>
<head>
<title>Plan Your Stay</title>
<?php include("includes/connect.php"); ?>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="css/chocolat.css" type="text/css">

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel and Table Booking Website" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="js/bootstrap.min.js"></script>
<!---->
<link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="js/jquery.chocolat.js"></script>
		<!--lightboxfiles-->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<!--script-->
<!--startsmothscrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

<script src="js/modernizr.custom.97074.js"></script>
</head>
<body>

					<h3 class="tittle">FORGOT PASSWORD</h3>
					<div class="contact-grids">
						<form action="fp.php" method="post">
						<!--	<div class="col-md-6 grid-contact">
								<div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="text" name="username" placeholder="userName"  required >								
									<div class="clearfix"> </div>
								</div>-->
								<div class="your-top">
									<i class="glyphicon glyphicon-envelope"> </i>
									<input type="text" name="email" placeholder="E-mail"  required>								
									<div class="clearfix"> </div>
								</div>
                                
                                
								
							
							<div class="col-md-6 grid-contact-in">
								
								<input type="submit" value="Submit" name="submit">
                                
							</div>
							<div class="clearfix"> </div>
						</form>
					</div>
			
     
     
     
     <?php session_start();
 //connects to the database
 $host = "localhost";
$user="root";
$pass="NO";
$db="hotelbooking";
$con=new mysqli($host,$user,$pass,$db,8080);

// Check connection
if (mysqli_connect_error())
  {
  echo  mysqli_connect_error();
  }
  else{
	 echo "connected";

  }

if(isset($_POST['submit']))
{ 

 $email=$_POST['email'];
 $q=mysql_query("select * from usign where email='".$email."' ") or die(mysql_error());
 $p=mysql_affected_rows();
 if($p!=0) 
 {
  $res=mysql_fetch_array($q);
  $to=$res['email'];
  $subject='Remind password';
  $message='Your password : '.$res['password']; 
  $headers='From:avm.kumar@gmail.com';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
    echo'Check your inbox in mail';
  }
  else
  {
   echo'mail is not send';
  }
 }
 else
 {
  echo'You entered mail id is not present';
 }
}
?>