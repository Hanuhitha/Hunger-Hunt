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
					<input type="date" name="check-in" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>">
				</div>
				<div class="col-md-2 banner-grid">
					<label for="check-in">Check Out Date</label>
					<input type="date" name="check-out" value="<?php echo date("Y-m-d"); ?>"  min="<?php echo date("Y-m-d"); ?>">
				</div>
				
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
        
							 
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
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
										<h5>Hotel Guide</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="images/a2.jpg" class="b-link-stripe b-animate-go thickbox">
									<img src="images/a2.jpg" alt="" />
									<div>
										<h5>Stay Guide</h5>
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
