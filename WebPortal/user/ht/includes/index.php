<!DOCTYPE html>
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
<body vlink="white">
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
                              <?php 
							   session_start();
							   if(isset($_POST['login']))
		{ 
		 $_SESSION["email"] = $_POST ['email'];
    $_SESSION["password"] = $_POST ['password'];
$email=$_SESSION["email"];
$password=$_SESSION["password"];
   $_SESSION['select_user']=$_POST['select_user']; 
    switch($_SESSION['select_user']==true)
	{
		case "user":
    if ($email && $password)
   {
        $connect = mysql_connect ("localhost","root","") or die ("Could not connect");
        mysql_select_db ("hotelbooking",$connect) or die ("Could not find database");
		
		$sql="SELECT username FROM usign WHERE email='$email' and password='$password'";
      
	   $q=mysql_query ($sql,$connect);
   
	
while	($r=mysql_fetch_array($q))
{
	

//header('Location:index.php');
echo $r['username'];
	}

               
break;
}
case "admin":

	
	 if ($email && $password)
   {
        $connect = mysql_connect ("localhost","root","") or die ("Could not connect");
        mysql_select_db ("hotelbooking",$connect) or die ("Could not find database");
		
		$sql="SELECT hotel_name FROM hotel WHERE email='$email' and password='$password'";
      
	   $q=mysql_query ($sql,$connect);
   
	
while	($r=mysql_fetch_array($q))
{
	

//header('Location:index.php');
echo $r['hotel_name'];
	}

               
break;
}
}
	
	
	
	
	
		
		?>
        
        
        
        <!-- <a href="logout.php">Logout</a>|<a href="#"> -->
        <a href="logout.php">Logout</a><?php echo $r['username'];?>
		<?php $q="select * from usign where email='".$_SESSION['email']."'";
		$d=mysql_query($q);
		$r=mysql_fetch_assoc($d);
		//echo $r['username'];
		
		//echo $_SESSION['name'];
		?></a>
        <?php }
		else {
		?>		
        <a href="signup.php">sign in</a>|<a  href="#log_in" class="scroll">Login</a>|
       
        <?php } ?>
							 
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>

	<div class="banner-section">
		<div class="container">
			<div class="banner-heder">
				<h3>We Plan Your Stay<span>Best Available Choice in Town</span></h3>
			</div>
			<div class="banner-grids">
				<form action="sample1.php" method="post">
				<div class="col-md-2 banner-grid">
					<label for="hotel-location">Location</label>
					<select class="sel" name="loc">
						<?php $sql = "SELECT DISTINCT(city) FROM hotel";
								if($result = $link->query($sql))
								{
									if($result->num_rows > 0){
									while($row = $result->fetch_assoc()){
										echo "<option value='" . $row['city'] . "'>". $row['city'] ."</option>";
									}}
								else
								{
									echo "<option value=''>No Location Available </option>";
								}
								}
								?>
					</select>							
				</div>
				<div class="col-md-2 banner-grid">
					<label for="check-in">Check In Date</label>
					<input type="date" name="check-in" value="<?php echo date("Y-m-d"); ?>">
				</div>
				<div class="col-md-2 banner-grid">
					<label for="check-in">Check Out Date</label>
					<input type="date" name="check-out" value="<?php echo date("Y-m-d"); ?>">
				</div>
				<!--<div class="col-md-2 banner-grid">
					<select class="sel">
						<option value="">Hotel</option>
						<!--
						<option value="">Hilton</option>
						<option value="">Orange county</option>
						<option value="">Sheraton</option> 
					</select>								
				</div> 
				<div class="col-md-2 banner-grid">
					<select class="sel">
					<option value="">Type</option>
						<option value="">Group</option>
						<option value="">Trip</option> -->
					<!--</select>									
				</div>
				<div class="col-md-2 banner-grid">
					<select class="sel">
					<option value="">Select price</option>
						<option value="">$100 </option>
						<option value="">$500</option>
						<option value="">$700</option>
						<option value="">$4500</option> 
					</select>									
				</div>-->
				<div class="col-md-4 search">
					<br>
						<input type="submit" value="Check Availability" name="availability"> <br>	
				</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
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
								<h1><a href="index.html"><span>Trip</span> Guide</a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav cl-effect-11">
							<li class="active"><a href="#" data-hover="Home" class="scroll"> </a></li>
							<li><a href="#about" data-hover="About" class="scroll">About</a></li>
							<li><a href="#tours" data-hover="Tours" class="scroll">Tours</a></li>
								
							<!--<li><a href="#services" data-hover="Services" class="scroll">Services</a></li>
							<li><a data-hover="News" href="#news" class="scroll">News</a></li>
							  <li><a href="#guides" data-hover="Guides" class="scroll">Guides</a></li> -->
							 <li><a data-hover="Contact" href="#contact" class="scroll">Contact</a></li>
                              <li><a data-hover="Login" href="#log_in" class="scroll">Login</a></li>
							 
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>
	<!--
		<div class="content">
			<div class="promotions">
				<div class="container">
					<h2 class="tittle">Top Trip Guide</h2>
					<span>Best Travel Packages Available</span>
					<div class="promotion-grids">
						<div class="col-md-4 promation-grid">
							<img src="images/p1.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Cuba</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5> America </h5>
									</div>
									<div class="prom-right">
									<h5>  Luxury  </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque. Maecenas semper erat et justo porta auctor nec lobortis elit.</p>
							</div>
						</div>
						<div class="col-md-4 promation-grid">
							<img src="images/p2.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Berlin</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5> Europe </h5>
									</div>
									<div class="prom-right">
									<h5>  Relax  </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque. Maecenas semper erat et justo porta auctor nec lobortis elit.</p>
							</div>
						</div>
						<div class="col-md-4 promation-grid">
							<img src="images/p3.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Dubai</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5> Asia </h5>
									</div>
									<div class="prom-right">
									<h5>  Luxury  </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque. Maecenas semper erat et justo porta auctor nec lobortis elit.</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="promotion-grids">
						<div class="col-md-4 promation-grid">
							<img src="images/p5.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>Rome</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5> Europe </h5>
									</div>
									<div class="prom-right">
									<h5>  Luxury  </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque. Maecenas semper erat et justo porta auctor nec lobortis elit.</p>
							</div>
						</div>
						<div class="col-md-4 promation-grid">
							<img src="images/p6.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>india</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5>  Asia </h5>
									</div>
									<div class="prom-right">
									<h5>  Relax  </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque. Maecenas semper erat et justo porta auctor nec lobortis elit.</p>
							</div>
						</div>
						<div class="col-md-4 promation-grid">
							<img src="images/p4.jpg" class="img-responsive" alt=""/>
							<div class="prom-text">
								<h4>London</h4>
								<div class="prom-bottom">
									<div class="prom-left">
										<h5> Europe </h5>
									</div>
									<div class="prom-right">
									<h5>  Relax  </h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque. Maecenas semper erat et justo porta auctor nec lobortis elit.</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div> -->
			<!--about--->
				<div class="about-section" id="about">
					<div class="container">
						<h3 class="tittle"> About us</h3>
						<div class="about-grids">
							<div class="col-md-4 about-grid">
								<img src="images/slider4.jpg" class="img-responsive" alt=""/><br>
                                
                                <img src="images/slider3.jpg" class="img-responsive" alt=""/><br>
                                <img src="images/slider2.jpg" class="img-responsive" alt=""/><br>
                               
							</div>
							<div class="col-md-8 about-grid1">
								<div class="about-top">
									<div class="about-left">
										<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
									</div>
									<div class="about-right">
                                     <h4> You Will Love To Loose Yourself,Even Ghost Can Love </h4><br>
                                     
                                     
									<h4>Hotel Online Booking Service</h4>
                                       
										<p>We provide a wide varity of different rooms and tables available for you in your door step.
                                        what you want,what you expect all are here !!!  
                                         </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="about-top1">
									<div class="about-left">
										<i class="glyphicon glyphicon-plane" aria-hidden="true"></i>
									</div>
									<div class="about-right">
										<h4>Online Table Booking Service</h4>
										<p>A Large amount of tables and resorts all the the world are found here.we provide different evnironment for all types of people as they expect.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="about-top1">
									<div class="about-left">
										<i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
									</div>
									<div class="about-right">
										<h4>Taxi Cab Booking </h4>
										<p>We offer transport services for picking you up and dropping you up from your point of distination and to your needed area.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="about-top">
									<div class="about-left">
										<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
									</div>
									<div class="about-right">
										<h4> Guide for Tours</h4>
										<p>We have all facilities to help you and guide you for all your quires and promise you to have a happy and lovely trip.</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--about---> <!--
			<div class="featured-services" id="services">
				<div class="container">
					<h3 class="tittle">Our Services</h3>
					<div class="featured-grids">
						<div class="col-md-3 featured-grid">
							<div class="featured-grd">
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<h5>vel illum qui dolorem</h5>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
								<div class="more m2">
									<a href="#" class="btn effect6" data-toggle="modal" data-target="#myModal1">Learn More</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 featured-grid">
							<div class="featured-grd">
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								<h5>vel illum qui dolorem</h5>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
								<div class="more m2">
									<a href="#" class="btn effect6" data-toggle="modal" data-target="#myModal1">Learn More</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 featured-grid">
							<div class="featured-grd">
								<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
								<h5>vel illum qui dolorem</h5>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
								<div class="more m2">
									<a href="#" class="btn effect6" data-toggle="modal" data-target="#myModal1">Learn More</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 featured-grid">
							<div class="featured-grd">
								<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								<h5>vel illum qui dolorem</h5>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
								<div class="more m2">
									<a href="#" class="btn effect6" data-toggle="modal" data-target="#myModal1">Learn More</a>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div> 
			<!--gallery--> 
				<div class="gallery" id="tours">
			<div class="container">
				<h3 class="tittle">Tours</h3>
				<div class="gallery-grids">
					<section>
						<ul id="da-thumbs" class="da-thumbs">
							<li>
								<a href="images/a1.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a1.jpg" alt="" />
									<div>
										<h5>Trip Guide</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="images/a2.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a2.jpg" alt="" />
									<div>
										<h5>Trip Guide</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="images/a3.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a3.jpg" alt="" />
									<div>
										<h5>Trip Guide</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="images/a4.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a4.jpg" alt="" />
									<div>
										<h5>Trip Guide</h5>
									</div>
								</a>
							</li>
							<li>	
								<a href="images/a5.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a5.jpg" alt="" />
									<div>
										<h5>Trip Guide</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="images/a6.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a6.jpg" alt="" />
									<div>
										<h5>Trip Guide</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="images/a7.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a7.jpg" alt="" />
									<div>
										<h5>Trip Guide</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="images/a1.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a1.jpg" alt="" />
									<div>
										<h5>Trip Guide</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="images/a2.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a2.jpg" alt="" />
									<div>
										<h5>Trip Guide</h5>
									</div>
								</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</section>
				</div>
				<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
				<script type="text/javascript">
					$(function() {
						$('#da-thumbs > li').each( function() { $(this).hoverdir(); } );
					});
				</script>
			</div>
		</div>

			<!--gallery-->
			<!-- team --><!--
			<div class="team" id="guides">
				<div class="container">
					<h3 class="tittle">Tour Guides</h3>
					<div class="team_gds">
						<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<div class="team_pos">
								<div class="team_back"></div>
								<img class="img-responsive" src="images/t1.jpg"  alt=" ">
								<div class="team_info">
									<a href="#"  class="face_one"><i class="fc1"></i></a>
									<a href="#"  class="face_one"><i class="fc2"></i></a>
									<a href="#"  class="face_one"><i class="fc3"></i></a>
								</div>
							</div>
							<h4>Filmr Doe</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
						</div>
					
						<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<div class="team_pos">
								<div class="team_back"></div>
								<img class="img-responsive" src="images/t3.jpg"  alt=" ">
								<div class="team_info">
									<a href="#"  class="face_one"><i class="fc1"></i></a>
									<a href="#"  class="face_one"><i class="fc2"></i></a>
									<a href="#"  class="face_one"><i class="fc3"></i></a>
								</div>
							</div>
							<h4>Jaye Smith</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
						</div>
						<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<div class="team_pos">
								<div class="team_back"></div>
								<img class="img-responsive" src="images/t4.jpg"  alt=" ">
								<div class="team_info">
									<a href="#"  class="face_one"><i class="fc1"></i></a>
									<a href="#"  class="face_one"><i class="fc2"></i></a>
									<a href="#"  class="face_one"><i class="fc3"></i></a>
								</div>
							</div>
							<h4>Federica</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
						</div>
						<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<div class="team_pos">
								<div class="team_back"></div>
								<img class="img-responsive" src="images/t2.jpg"  alt=" ">
								<div class="team_info">
									<a href="#"  class="face_one"><i class="fc1"></i></a>
									<a href="#"  class="face_one"><i class="fc2"></i></a>
									<a href="#"  class="face_one"><i class="fc3"></i></a>
								</div>
							</div>
							<h4>Victoria</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor 
									sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
						</div>
						<div class="clearfix"></div>		
					</div>
				</div>
			</div>
			<!--team-->
			<!--news--><!--
				<div class="news" id="news">
					<div class="container">
						<h3 class="tittle"> News</h3>
						<div class="news-grids">
						<div class="col-md-4 news-grid">
							<img src="images/p1.jpg" class="img-responsive" alt=""/>
							<div class="news-text">
								<h4>Lorem ipsum</h4>
								<div class="new-bottom">
									<h5> 05 December </h5>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque. Maecenas semper erat et justo porta auctor nec lobortis elit.</p>
								<div class="more m2">
									<a href="#" class="btn effect6" data-toggle="modal" data-target="#myModal1">Learn More</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 news-grid">
							<img src="images/p2.jpg" class="img-responsive" alt=""/>
							<div class="news-text">
								<h4>Lorem ipsum</h4>
								<div class="new-bottom">
									<h5> 30 November </h5>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque. Maecenas semper erat et justo porta auctor nec lobortis elit.</p>
								<div class="more m2">
									<a href="#" class="btn effect6" data-toggle="modal" data-target="#myModal1">Learn More</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 news-grid">
							<img src="images/p3.jpg" class="img-responsive" alt=""/>
							<div class="news-text">
								<h4>Lorem ipsum</h4>
								<div class="new-bottom">
									<h5> 19 September </h5>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque. Maecenas semper erat et justo porta auctor nec lobortis elit.</p>
								<div class="more m2">
									<a href="#" class="btn effect6" data-toggle="modal" data-target="#myModal1">Learn More</a>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
			<!--news-->
		</div>
			<div class="contact"  id="contact">
				<div class="container">
					<h3 class="tittle">Contact</h3>
					<div class="contact-grids">
						<form action="contact.php" method="post">
							<div class="col-md-6 grid-contact">
								<div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="text" name="name" placeholder="Name"  required >								
									<div class="clearfix"> </div>
								</div>
								<div class="your-top">
									<i class="glyphicon glyphicon-envelope"> </i>
									<input type="text" name="email" placeholder="E-mail"  required>								
									<div class="clearfix"> </div>
								</div>
								<div class="your-top">
									<i class="glyphicon glyphicon-phone"> </i>
									<input type="text" name="mobileno" placeholder="Mobile Number"  required>								
									<div class="clearfix"> </div>
								</div>
								
							</div>
							<div class="col-md-6 grid-contact-in">
								<textarea name="message"  placeholder=" Message"  required></textarea>
								<input type="submit" value="Send" name="send">
                                
							</div>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
            
            
            
            
            
            
            </div>
			<div class="contact"  id="log_in">
				<div class="container">
					<h3 class="tittle">Log In</h3>
					<div class="contact-grids">
						<form action="index.php" method="post">
							<div class="col-md-6 grid-contact">
                            
                            <div class="your-top">
									<i class="glyphicon glyphicon-envelope"> </i>
									<input type="text" name="email" placeholder="Email"  required>								
									<div class="clearfix"> </div>
								</div>
							<div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="password" name="password" placeholder="password"  required >								
									<div class="clearfix"> </div>
								</div>
								<h4>Select user</h4><br>
									<div class="your-top">
									<select name="select_user" class="sel">
										<option value="user">USER</option>
										<option value="admin">ADMIN</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								
							
							<div class="col-md-6 grid-contact-in">
								
							<br><br>	<input type="submit" value="Login" name="login"><br><br>
                                </form>
								<form action="signup.php" method="POST">
                                
                                <input type="submit" value="User Sign Up" name="uregister">
							</div>
							<div class="clearfix"> </div>
							</form>
							<br><div class="col-md-6 grid-contact-in">
								<form action="register.php" method="POST">
                                
                                <input type="submit" value="Hotel Admin Sign Up" name="hregister">
							</div>
							<div class="clearfix"> </div>
							</div>
						</form>

					</div>
					
				</div>
				
			</div>
		
		<!--footer-->
			
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'home', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="home" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="news-gr">
							<img src="images/p6.jpg" class="img-responsive" />
							<h3 class="tittle1">Trip Guide</h3>
								<p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>

							</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>
