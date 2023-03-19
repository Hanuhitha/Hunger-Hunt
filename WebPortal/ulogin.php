<?php
require("connection.php");
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$pass=md5($p);	

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
session_start();
$_SESSION['user']=$e;
header('location:user');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>

<html>
<head>
<title>User Login</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>


<!-------------------------NEED form VALIDATION------------------------------------------------------------------------------------------------->
<script type="text/javascript">
   
      function validate()
      {
      
      
if( document.myForm.p.value == "")
         {
            alert( "Please enter ur password" );
            document.myForm.p.focus() ;
            return false;
         }

if( document.myForm.e.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.e.focus() ;
            return false;
         }
      
         
      }
   //-->
</script>

<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->	
<!--Google Analytics Designmaz-->
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');</script>

    <!-- Load jQuery from Google's CDN -->
    <!-- Load jQuery UI CSS  -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    <!-- Load jQuery JS -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
    <script src="script1.js"></script>

</head>
<body>
<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="index.php"><span>Web Portal</span></a></h1>
				</div>
<ul class="nav navbar-nav navbar-right">
<li><a href ="index.php">Home</a></li>
 <li><a href="alogin.php"><span class="glyphicon glyphicon-user"></span>Admin Login</a></li>


   
        <li><a href="ulogin.php"><span class="glyphicon glyphicon-log-in"></span>User Login</a></li>
		<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>signup</a></li>
        <li><a href="#hotels"><span class="glyphicon glyphicon-bed"></span> hotels</a></li>
        <li><a href="#property"><span class="glyphicon glyphicon-piggy-bank"></span>Property</a></li>
        <li><a href="#insurance"><span class="glyphicon glyphicon-hand-right"></span>Insurance</a></li>
		<li><a href="#buses"><span class="glyphicon glyphicon-bed"></span>buses</a></li>
      </ul>
				<!--navbar-header-->
				<div class="header-dropdown">
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<nav class="navbar navbar-inverse-right">
  <div class="container-fluid">
    
    
  </div>
</nav>
  
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>	<!--//header-->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<div class="book-grids">
					<div class="col-md-6 book-left">
						<div class="book-left-info">
							<h3>User Login</h3>
						</div>
						<div class="book-left-form">
							
		<form method="post" action="" enctype="multipart/form-data" name="myForm" onsubmit="return(validate());">
   
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"> <?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>User Email-id


</td>
					<Td><input  type="email"  class="form-control" name="e" required/></td>
				</tr>
				<tr>
					<td>Password</td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
				
					<tr>
<td>
<input type="submit" class="btn btn-success" value="Submit" name="save"/>

					
					</td>
				</tr>
				
				
			</table>
		</form>
						</div>
					</div>
					<div class="col-md-6 book-left book-right">
						<img src="images/lock.jpg" width="200px" height="200px" />
						<div class="book-left-bottom">
							
							
						</div>
						
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- footer -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>		
</body>
</html>
