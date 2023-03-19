<html>

<title>Plan Your Stay</title>
<head>
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
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<div class="header">
		<div class="container">
			<div class="header-menu">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="navbar-brand logo">
								<h1><a href="index.html"><span>Stay</span> Guide</a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav cl-effect-11">
					          <i class="glyphicon glyphicon-home" style="font-size:40px"></i>
							  	
                              <li><a data-hover="HOME" href="index.php">HOME</a></li>
							 
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>
</head>
		<body>
        	
			
					<h3 class="tittle">Sign Up</h3>
					<div class="contact-grids">
						<form action="signup.php" method="post">
							<div class="col-md-6 grid-contact">
								<div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="text" name="username" placeholder="userName"  required >	<?php if(isset($errname)) echo $errname; ?>							
									<div class="clearfix"> </div>
								</div>
								<div class="your-top">
									<i class="glyphicon glyphicon-envelope"> </i>
									<input type="text" name="email" placeholder="E-mail"  required>	<?php if(isset($erremail)) echo $erremail; ?>							
									<div class="clearfix"> </div>
								</div>
                                
                                <div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="password" name="password" placeholder="password"  required >								
									<div class="clearfix"> </div>
								</div>
                                <br><br>
                                <div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="password" name="cpassword" placeholder="conform password"  required >		<?php if(isset($errcpass)) echo $errcpass; ?>						
									<div class="clearfix"> </div>
								</div><br><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-phone"> </i>
									<input type="text" name="mobileno" placeholder="Mobile Number"  required>	<?php if(isset($errmob)) echo $errmob; ?>							
									<div class="clearfix"> </div>
								</div><br>
								
							
							<div class="col-md-6 grid-contact-in">
								
								<input type="submit" value="Sign up" name="signup">
                                
							</div>
							<div class="clearfix"> </div>
						</form>
					</div>
			
            
   <?php
$errname="";
//$errpass="";
$errcpass="";
$erremail="";
$errmob="";
if(isset($_POST['signup']))
{
 if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["username"]) === 0){
      $errname = "Please enter your full name";	
	
	if(preg_match("/^\d{3}-\d{7}$/", $_POST["mobileno"]) === 0){
      $errmob = "enter a valid mobile no";
	  
	 if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$erremail = "valid UserEmail";
	

if($_POST["password"] == $_POST["cpassword"]){
	//$msg = $cpassword; 
	$errcpass='password matched';
//$d= "invalid cpassword";	

	
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
  
  
  $username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];
$mobile=$_POST['mobileno'];

$ins= "INSERT INTO usign( username,email,password,cpassword,mobileno) VALUES ('$username','$email','$password','$cpassword','$mobile')";

if($con->query($ins)==TRUE)
{
	echo "<script>alert('You are Registered Successfully THANKYOU');</script>";
	echo "<script>window.location = 'index.php'; </script>";
	
    
}
else
{
	echo "not inserted".$con->error;
	

}
}else{ echo "password doesnt match";}
}else { echo "not a valid email id";}
}else { echo "not a valid mobile number";}
}else { echo "not a valid username";}


}
//mysqli_close($con);
 
 ?> 
	
	         
            
            
            
            
            
		
			
			
				
</body>
</html>
