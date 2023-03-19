<?php 
session_start();

require("connection.php");
$b=$_SESSION['aa'];
$_SESSION['cc']=$b;
?>
<!DOCTYPE html>
<html>
<head>
<title>Bus Reservation System</title>
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
 <a class="navbar-brand" href="#">Hello <?php echo $b;?></a>
					<h1><a  href="index.php"><span>BUS RESERVATION SYSTEM &nbsp</span></a></h1>


				</div>
<a class="navbar-brand" href="a.php">Logout</a>

 
			<!--navbar-header-->
				<div class="header-dropdown">
					<div class="emergency-grid">
						<ul>
							<li>Toll Free : </li>
							<li class="call"> 1800 - 419 - 4287</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
 <li><a href="index.php">Ticket Booking</a></li>
 <li><a href="#">About Us</a></li>
 <li ><a href="#">Contact Us</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Bus Routes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Hyderabad to Bangalore</a></li>
          <li><a href="#">Pune to Bangalore</a></li>
          <li><a href="#">Hyderadab to Chennai</a></li>
<li><a href="#">Coimbatore to Bangalore</a></li>
<li><a href="#">Chennai to Madurai</a></li>
<li><a href="#">More Routes>></a></li>
        </ul>
      </li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Cities<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Hyderabad</a></li>
          <li><a href="#">Bangalore</a></li>
          <li><a href="#">Chennai</a></li>
<li><a href="#">Pune </a></li>
<li><a href="#">Cities>></a></li>
        </ul>
      </li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Bus Operators<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">SRS Travels</a></li>
          <li><a href="#">KPN Travels</a></li>
          <li><a href="#">SRM Transport</a></li>
 <li><a href="#">VRL Travels</a></li>
          <li><a href="#">Morning StarTravels</a></li>
 <li><a href="#">Kallada Travels</a></li>
          <li><a href="#">More Operators>></a></li>
        </ul>
      </li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Top RTC's<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">APSRTC</a></li>
          <li><a href="#">MSRTC</a></li>
          <li><a href="#">HRTC</a></li>
 <li><a href="#">UPSRTC</a></li>
                    <li><a href="#">RTCs>></a></li>
        </ul>
      </li>
    
    </ul>
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
				</div>



				
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="images/road.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images/dd1.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/dd3.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/dd4.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/dd2.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
<!--end of col-->
<div class="col-md-8 banner-right">
<div class="sap_tabs">	
                                            <div class="booking-info">
						<h2>Find and book your low-cost bus trip</h2>
					   </div>
<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							 
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>BOOK TICKET</span></li>
							  <div class="clearfix"></div>
						  </ul>		
<!---------------------------------------------------------------------------------------------------------------->
<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
<div class="facts">
<div class="booking-form">
											<!---strat-date-piker---->
											<link rel="stylesheet" href="css/jquery-ui.css" />
											<script src="js/jquery-ui.js"></script>
													  <script>
															  $(function() {
																$( "#datepicker,#datepicker2" ).datepicker({minDate:0});
															  });
													  </script>

											<!---/End-date-piker---->
<div class="online_reservation">
<div class="b_room">
<div class="booking_room">
<form action="oneway.php" method="post" enctype="multipart/form-data"
<div class="reservation">
<ul>		
<li  class="span1_of_1 desti">
																		 <h5>Source</h5>
																		 <div class="book_date">
																			 
																				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																				<input type="text" placeholder="Type Departure City" name="s1" class="typeahead1 input-md form-control tt-input" required="">
																			 
 </div>					
</li>
<li  class="span1_of_1 left desti">
																		 <h5>Destination</h5>
																		 <div class="book_date">
																		
																			<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																			<input type="text" placeholder="Type Destination City" name="s2" class="typeahead1 input-md form-control tt-input" required="">
																		 
 </div>		
</li>
<div class="clearfix"></div>
</ul>
</div>
<div class="reservation">
<ul>	
<li  class="span1_of_1">
																	 <h5>Departure</h5>
																		 <div class="book_date">
																			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input type="text" name="s3" id="datepicker2" />
																		 
</div>
</li>
																	
																</ul>
</div>
<div class="reservation">
																<ul>	
																	 <li class="span1_of_3">
																			<div class="date_btn">
																				
																					<input type="submit" name="search" value="Search" />
																				
																			</div>
	</li>
<div class="clearfix"></div>
</ul>
</div>
</form>
														</div>
														
													</div>
											</div>
											<!---->
										</div>	
								</div>
							</div> 			        					            	      
						  </div>	
					  </div>	
				</div>
			</div>
			<div class="clearfix"> </div>
											


	
<!---------------------------------->
			
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<div class="move-text">
		<div class="marquee">Check and compare numerous bus offers to seal the best deal!</div>
		<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
        <script>
		  $('.marquee').marquee({ pauseOnHover: true });
		  //@ sourceURL=pen.js
		</script>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Top Search</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="destinations">
						 <ul>
							<li class="button"><a href="#">Track Bus Status</a>
								<li class="dropdown active">
									<a href="index.html">
										<div class="destinations-grid">
											<img src="images/dd1.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Time</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">status</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Reschedule Trip</a>
								<li class="dropdown">
									<a href="index.html">
										<div class="destinations-grid">
											<img src="images/a4.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Modify</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">date</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>							
							<li class="button"><a href="#">Baggage Allowance</a>
								 <li class="dropdown">
									<a href="products">
										<div class="destinations-grid">
											<img src="images/a3.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">allotment</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">check</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Resend E-ticket</a>
								 <li class="dropdown">
									<a href="index.html">
										<div class="destinations-grid">
											<img src="images/a1.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Requset</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">confirmation</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							 </li>							 
						 </ul>
					</div>
					<div class="choose">
						<div class="choose-info">
							<h4>Why Choose Us</h4>
						</div>
						<div class="choose-grids">
							<div class="choose-grids-info">
								<div class="choose-left">
									<h5><1</h5>
									<span>Minutes</span>
								</div>
								<div class="choose-right">
								
									<p>Skip the line and book your bus tickets in no time.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								</div>
								<div class="choose-right">
									
									<p>Real bus experts answer your emails, calls or tweets.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<h6>$</h6>
								</div>
								<div class="choose-right">
								
									<p>Compare prices, schedules and amenities from various travels </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-middle">
						<a href=index.html">
							<img src="images/dd3.jpg" alt="" />
							<div class="destinations-grid-info tours">
				
								<p>250 Travel Partners</p>
								<p class="b-period"> 1200 Users</p>
							</div>
						</a>
					</div>
					<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>Top Destinations</h4>
						</div>
						<div class="top-destinations-bottom">
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/chennai.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="index.html">Chennai</a>
									
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>190</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/bangalore.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="index.html">bangalore</a>
									
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>213</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/hyderabad.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="index.html">hyderabad</a>
									
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>176</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="images/pune.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="index.html">pune</a>
							
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>490</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="top-destinations-info">
						<h4>Customer Services</h4>
					</div>
					<div class="customer-grid">
						<div class="customer-left-grid">
							<div class="c-left-grids">
								<div class="c-left">
									<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
								</div>
								<div class="c-right">
									<a href="#">Print E-Ticket</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="c-left-grids">
								<div class="c-left">
									<span class="glyphicon glyphicon-road" aria-hidden="true"></span>
								</div>
								<div class="c-right">
									<a href="#">Road Status</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="c-left-grids">
								<div class="c-left">
									<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								</div>
								<div class="c-right">
									<a href="#">Manage Bookings</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="c-left-grids">
								<div class="c-left">
									<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
								</div>
								<div class="c-right">
									<a href="#">Refund Status</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="customer-left-grid">
							<div class="c-left-grids">
								<div class="c-left">
									<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
								</div>
								<div class="c-right">
									<a href="#">Cancellation</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="c-left-grids">
								<div class="c-left">
									<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
								</div>
								<div class="c-right">
									<a href="faqs.html">FAQs</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="c-left-grids">
								<div class="c-left">
									<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
								</div>
								<div class="c-right">
									<a href="#">Complaints</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="c-left-grids">
								<div class="c-left">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</div>
								<div class="c-right">
									<a href="contact.html">Contact</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="news-grids">
						<div class="news-grids-info">
							<h4>Latest News</h4>
						</div>
						<div class="news-grids-bottom">
							<!-- date -->
							<div id="design" class="date">
								<div id="cycler">   
									<div class="date-text">
										<a href="single.html">August 15,2016</a>
										<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
									</div>
									<div class="date-text">
										<a href="single.html">July 08,2016</a>
										<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
									</div>
									<div class="date-text">
										<a href="single.html">september 15,2015</a>
										<p>Dggggggggggggggggggggg</p>
									</div>
									
								</div>
								<script>
									function cycle($item, $cycler){
										setTimeout(cycle, 2000, $item.next(), $cycler);
										
										$item.slideUp(1000,function(){
											$item.appendTo($cycler).show();        
										});
						
										}
									cycle($('#cycler div:first'),  $('#cycler'));
								</script>
							</div>
							<!-- //date -->
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Popular Places</h3>
			</div>
			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">			 
					 <ul id="flexiselDemo1">
						 <li>
							 <a href="products.html"><img src="images/b1.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="images/b2.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="images/b3.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="images/b4.jpg" alt=""/>
							 </a>
						 </li>
						</ul>
						<script type="text/javascript">
						 $(window).load(function() {			
						  $("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover:true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
				</div>
			</div>
			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Corporate Information</h4>
						<ul>
							<li><a href="index.html">Member Login</a></li>
							<li><a href="index.html">Admin Login</a></li>
							<li><a href="index.html">Groups</a></li>
							<li><a href="index.html">About Us</a></li>
							<li><a href="index.html">Customer Services</a></li>
							<li><a href="index.html">Help</a></li>
							
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Key Information</h4>
						<ul>
							<li><a href="index.html">Search Place</a></li>
							<li><a href="index.html">Distance Calculator</a></li>
							<li><a href="index.html">Video Gallery</a></li>
							<li><a href="index.html">Bus Information </a></li>
							<li><a href="index.html">Service Information</a></li>
							<li><a href="index.html">Feedback</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>General</h4>
						<ul>
							<li><a href="index.html">FAQ's</a></li>
							<li><a href="index.html">Terms & Conditions</a></li>
							<li><a href="index.html">Privacy policy</a></li>
							<li><a href="index.html">Newsletter</a></li>
							
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Top Bus Stops in..</h4>
						<ul class="chf_footer_list">
							<li><a href="#">Chennai</a></li>
							<li><a href="#">Bangalore</a></li>
							<li><a href="#">Hyderabad</a></li>
							<li><a href="#">Madurai</a></li>
							<li><a href="#">Coimbatore</a></li>
							<li><a href="#">more</a></li>
							
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- news-letter -->
				<div class="news-letter">
					<div class="news-letter-grids">
						<div class="col-md-4 news-letter-grid">
							<p>Toll Free No : <span>1800-419-4287</span></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<p class="mail">Email : <a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<form>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //news-letter -->
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">
					<div class="col-md-4 footer-bottom-left">
						<h4>Follow Us</h4>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>We Accept</h4>
						<div class="a-cards">
							<ul>
								<li><a href="#"><img src="images/c1.png" alt="" /></a></li>
								<li><a href="#"><img src="images/c2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="images/c3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
<h3>CONTACT US</h3>
						
						<form  action="" method="POST">


							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" required = "true">
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input class="form-control" name="email" required = "true">
															</div>
							<div class="form-group">
								<label>Message:</label>
								<textarea class="form-control" rows="5" name="message" required = "true"></textarea>
							</div>
						  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>

								</div>
					
					

					<div class="clearfix"> </div>
					
				</div>
		</div>
	</div>
<!-- Modal -->


		<div class="modal fade" id="myModal1">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="color:#000;">User Login</h4>
					</div>
					<div class="modal-body">
						<p>Don't have an account? <a href="signup.php" style="color:#0000ff;">Register</a></p>
						<form role="form" action="uindex.php" method="POST">
							<div class="form-group">
								<input type="email" class="form-control"  placeholder="Email" name="e" required = "true">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="p" required = "true">
							</div>
						    <button type="submit"  name="save" class="btn btn-primary">Login</button>
						</form><br/>
						<a href="" style="color:#0000ff">Forgot Password?</a>
<label>
                                        <?php echo @$err;?>
                                    </label>
					</div>
				</div>
			</div>
		</div>
		<!-- End of myModal -->	</body>

<!-- Modal -->

		<div class="modal fade" id="myModal">
			<div class="modal-dialog" style="left:0px;">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="color:#000;">Admin Login</h4>
					</div>
					<div class="modal-body">
						
						<form role="form" action="admin/adminlogin.php" method="POST">
							<div class="form-group">
								<input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="pass" required = "true">
							</div>
						    <button type="submit"  name="login" class="btn btn-primary">Login</button>
						</form><br/>
						<a href="" style="color:#0000ff">Forgot Password?</a>
 <label>
                                        <?php echo @$err;?>
                                    </label>
					</div>
				</div>
			</div>
		</div>
		<!-- End of myModal -->	</body>

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
