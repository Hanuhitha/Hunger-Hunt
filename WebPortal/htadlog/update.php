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
<?php session_start();
if(isset($_SESSION['email']) && $_SESSION['email'] != NULL ){
		$email = $_SESSION['email'];
		$host = "localhost";
$user="root";
$pass="";
$db="hotelbooking";
$con=new mysqli($host,$user,$pass,$db);
if(isset($_POST['update']))
{
	 $up = "UPDATE hotel SET hotel_name='$_POST[name]',
state='$_POST[state]',
city='$_POST[city]',
address='$_POST[address]',
pincode='$_POST[pin]',
map='$_POST[map]',
free_cancellation='$_POST[fc]',
pay_at_hotel='$_POST[payh]',
free_wifi='$_POST[wifih]',
free_cab='$_POST[th]',
gym='$_POST[gymh]',
swimming_pool='$_POST[poolh]',
cafe='$_POST[cafeh]',
parking='$_POST[ph]',
airport='$_POST[airport]',
railway='$_POST[railway]',
hospital='$_POST[hospitals]',
bus_stop='$_POST[bus]',
type_of_hotel='$_POST[htype]',
standard='$_POST[std_room]',
deluxe='$_POST[deluxe_room]',
suite='$_POST[suite_room]',
quad='$_POST[quad_room]',
no_of_tables='$_POST[ttable]',
password='$_POST[password]',
cpassword='$_POST[cpassword]',
email='$_POST[email]',
mobile='$_POST[mobileno]',
website='$_POST[urll]',
standardprice='$_POST[std_room_pri]',
deluxeprice='$_POST[deluxe_room_pri]',
quadprice='$_POST[quad_room_pri]',
suiteprice='$_POST[suite_room_pri]'  WHERE email =   '" . $email ."'";
  if($con->query($up)==TRUE)
{
	echo "updated";
	// the message

	//echo "<script>alert('You are Registered Successfully user THANKYOU');</script>";
	//echo "<script>window.location = 'index.php';</script>";
}
else{
	echo "could not update";
}}
		 $select = "SELECT * FROM `hotel` WHERE email = '" . $email ."'";
		$mydata = $con->query($select);
		if($mydata->num_rows > 0)
		{
		while($record = $mydata->fetch_assoc())
		{
			//print_r($record);
		echo '<div class="contact"  id="contact">
				
					<h3 class="tittle">Hotel Registration</h3>
					
						<form action="#" method="post">
								<div class="container"><div class="contact-grids">
								<div class="col-md-8 grid-contact">
								   
									<input type="hidden" name="hotel_id" value='.$record['hotel_id'].'/>
									<h3><b> Hotel Information </b></h3>
									<br><p>Hotel Name</p><br>
									<div class="your-top">
									<i class="glyphicon glyphicon-user style="font-size:100px"> </i>
									<input type="text" name="name" placeholder="Hotel Name" value='.$record["hotel_name"].' required >								
									<div class="clearfix"> </div>
									</div><br>
                                    
                                    <br><p>Hotel Type</p><br>
									<div class="your-top">
									<select name="htype" class="sel">
                                    <option value="s">Select</option>
										<option value="7star" name="7" '; if($record["type_of_hotel"] == "7star") echo"selected";  echo '>7 Star</option>
										<option value="5star" name="5" '; if($record["type_of_hotel"] == "5star") echo"selected";  echo '>5 Star</option>
                                        <option value="3star" name="3 '; if($record["type_of_hotel"] == "3star") echo"selected"; echo ' >3 Star</option>
                                        <option value="multicuisine" name="mc" '; if($record["type_of_hotel"] == "multicuisine") echo"selected"; echo ' >multicuisine Resturent</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><p>Website</p><br>
                                <div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="text" name="urll" placeholder="Website URL" value="'.$record["website"].'" required >								
									<div class="clearfix"> </div>
									</div>
                                     <br>
									 <p>E-Mail</p><br>
									<div class="your-top">
									<i class="glyphicon glyphicon-envelope"> </i>
									<input type="text" name="email" placeholder="E-mail" value="'.$record["email"].'" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">								
									<div class="clearfix"> </div>
									</div>
									
								<br><P>Password</P><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-cutlery"></i>
									<input type="password" name="password" placeholder="Password has to be alphanumeric"  required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">								
									<div class="clearfix"> </div>
								</div>
								<br><P>Confirm Password</P><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-cutlery"></i>
									<input type="password" name="cpassword" placeholder="Retype Password"  required>								
									<div class="clearfix"> </div>
								</div>
									<br><P>Mobile</P><br>
									<div class="your-top">
									<i class="glyphicon glyphicon-phone"> </i>
									<input type="text" name="mobileno" placeholder="Mobile Number" value="'.$record["mobile"].'" required>								
									<div class="clearfix"> </div>
									</div>
                  	                <br><P>Address</P><br>
									<div class="your-top">
									<textarea name="address"  placeholder="Address"  required>'. $record["address"].'</textarea>                              
									<i class="glyphicon glyphicon-pencil"> </i>
									<div class="clearfix"> </div>
									</div>
                                     <br><P>City</P><br>
                                    <div class="your-top">
									<i class="glyphicon glyphicon-pencil"> </i>
									<input type="text" name="city" placeholder="City"  value="'.$record["city"].'" required>								
									<div class="clearfix"> </div>
									</div>
                                    <br><P>State</P><br>
                                   <div class="your-top">
									<i class="glyphicon glyphicon-pencil"> </i>
									<input type="text" name="state" placeholder="State" value="'.$record["state"].'" required>								
									<div class="clearfix"> </div>
									</div>
									<br><P>PINCODE</P><br>
									<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="pin" placeholder="PIN number" value="'.$record["pincode"].'" required>								
									<div class="clearfix"> </div>
									</div>
								    <br><P>Map</P><br>
                                    <div class="your-top">
									<i class="glyphicon glyphicon-map-marker"> </i>
									<input type="text" name="map" placeholder="Give your hotel map URL"  value="'.$record["map"].'" required >								
									<div class="clearfix"> </div>
									</div>

								</div>
								
							</div></div>
							<div class="container"><div class="contact-grids">
                            <div class="col-md-6 grid-contact">
								    <h3><b>Specification</b></h3><br>
									<br><P>Free Cancellation</P><br>
									<div class="your-top">
									<select name="fc" class="sel">
										<option value="1" name="fca" '; if($record["free_cancellation"] == 1) echo"selected" ; echo ' >Available</option>
										<option value="0" name="fcna" '; if($record['free_cancellation'] == 0) echo"selected" ; echo ' >Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Pay At Hotel</P><br>
									<div class="your-top">
									<select name="payh" class="sel">
										<option value="1" name="paya" '; if($record['pay_at_hotel'] == 1) echo"selected" ; echo ' >Available</option>
										<option value="0" name="payna" '; if($record['pay_at_hotel'] == 0) echo"selected" ; echo ' >Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Free-WiFi</P><br>
									<div class="your-top">
									<select name="wifih" class="sel">
										<option value="1"  name="wifia" '; if($record['free_wifi'] == 1) echo"selected" ; echo ' >Available</option>
										<option value="0"name="wifina" '; if($record['free_wifi'] == 0) echo"selected" ; echo ' >Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Transportation</P><br>
									<div class="your-top">
									<select name="th"class="sel">
										<option value="1" name="ta" '; if($record['free_cab'] == 1) echo"selected" ; echo ' >Available</option>
										<option value="0" name="tna" '; if($record['free_cab'] == 0) echo"selected" ; echo ' >Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Gym</P><br>
									<div class="your-top">
									<select name="gymh" class="sel">
										<option value="1" name="gyma" '; if($record['gym'] == 1) echo"selected" ; echo ' >Available</option>
										<option value="0" name="gymna" '; if($record['gym'] == 0) echo"selected" ; echo ' >Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Swimming Pool</P><br>
									<div class="your-top">
									<select name="poolh" class="sel">
										<option value="1" name="poola" '; if($record['swimming_pool'] == 1) echo"selected" ; echo ' >Available</option>
										<option value="0" name="poolna" '; if($record['swimming_pool'] == 0) echo"selected" ; echo ' >Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>24hrs Cafe</P><br>
									<div class="your-top">
									<select name="cafeh" class="sel">
										<option value="1" name="cafea" '; if($record['cafe'] == 1) echo"selected" ; echo ' >Available</option>
										<option value="0" name="cafena" '; if($record['cafe'] == 0) echo"selected" ; echo ' >Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Parking</P><br>
									<div class="your-top">
									<select name="ph" class="sel">
										<option value="1" name="para" '; if($record['parking'] == 1) echo"selected" ; echo ' >Available</option>
										<option value="0" name="parna" '; if($record['parking'] == 0) echo"selected" ; echo ' >Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
                                
                         <!--       <br><P>Images</P><br>
									<div class="your-top"> 
								 	 <input type="file" name="images[]" multiple="multiple" accept="image/*" >
                                     									<div class="clearfix"> </div>							
								 </div> -->
                                
                             </div>
							 <div class="col-md-6 grid-contact-in">
								<h3><b> ROOM DETAILS</b></h3><br><br><br>
								<br><p>Standard Type Room</p><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="std_room" value='.$record["standard"].' placeholder="Give number of Standard Type Room" >								
									<div class="clearfix"> </div>
								</div><br><br><p>Price of standard room</p><br>
									<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="std_room_pri" value='.$record["standardprice"].' placeholder="Price of standard room" >								
									<div class="clearfix"> </div>
								</div><br><br><p>Give number of DELUXE Type Room</p><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="deluxe_room" value='.$record["deluxe"].' placeholder="Give number of DELUXE Type Room"  >								
									<div class="clearfix"> </div>
								</div><br><br><p>Price of deluxe room</p><br>
								<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="deluxe_room_pri" value='.$record["deluxeprice"].' placeholder="Price of deluxe room"  >								
									<div class="clearfix"> </div>
								</div><br><br><p>Give number of Quad Type Room</p><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="quad_room" value='.$record["quad"].' placeholder="Give number of Quad Type Room"  >								
									<div class="clearfix"> </div>
								</div><br><br><p>Price of quad room</p><br>
								<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="quad_room_pri" value='.$record["quadprice"].' placeholder="Price of quad room"  >								
									<div class="clearfix"> </div>
								</div><br><br><p>Give number of Sutie Type Room</p><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="suite_room" value='.$record["suite"].' placeholder="Give number of Sutie Type Room">								
									<div class="clearfix"> </div>
								</div><br><br><p>Price of suite room</p><br>
								<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="suite_room_pri" value='.$record["suiteprice"].' placeholder="Price of suite room">								
									<div class="clearfix"> </div>
								</div><br><br><p>Give Total tables</p><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-cutlery"></i>
									<input type="text" name="ttable" value='.$record["no_of_tables"].' placeholder="Give Total tables"  required>								
									<div class="clearfix"> </div>
								</div>
								</div>
							</div></div>
							<div class="container"><div class="contact-grids">
							<div class="col-md-6 grid-contact">
								<br><h3><b>Public Transport</b></h3>
								<br><p>Nearest Airport</p><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-plane"></i>
									<input type="text" name="airport" value='.$record["airport"].' placeholder="Give nearest Airport to your hotel" >								
									<div class="clearfix"> </div>
								</div>
								<br><p>Nearest Railways</p><br>
								<div class="your-top">
									
								    <i class="glyphicon glyphicon-bed"></i>
									<input type="text" name="railway" value='.$record["railway"].' placeholder="Give nearest Railway to your hotel"  >								
									<div class="clearfix"> </div>
								</div>
								<br><p>Nearest Bus Terminus</p><br>
								<div class="your-top">
							
								    <i class="glyphicon glyphicon-road"></i>
										
									<input type="text" name="bus" value='.$record["bus_stop"].' placeholder="Give nearest Bus Terminus to your hotel"  >								
									<div class="clearfix"> </div>
								</div>
								<br><p>Nearest Hospitals</p><br>
								<div class="your-top">
									 <i class="glyphicon glyphicon-header"></i>
									<input type="text" name="hospitals" value='.$record["hospital"].' placeholder="Give nearest Hospital to your hotel"  >								
									<div class="clearfix"> </div>
								</div>
								
								<br>
								<br>
								<div class="col-md-12 grid-contact-in">
								<input type="submit" value="update" name="update">
								</div>
							</div>
							</div>
							</div>
</form>';
		}}
}else
{ ?>
	<div class="contact"  id="contact">
				
					<h3 class="tittle">Hotel Registration</h3>
					
						<form action="hotel_sign_up.php" method="post">
								<div class="container"><div class="contact-grids">
								<div class="col-md-8 grid-contact">
							
									<h3><b> Hotel Information </b></h3>
									<p>Hotel Name</p>
									<br><div class="your-top">
									<i class="glyphicon glyphicon-user style="font-size:100px"> </i>
									<input type="text" name="name" placeholder="Hotel Name"  required >								
									<div class="clearfix"> </div>
									</div><br>
                                    
                                    <br><h4>Hotel Type</h4><br>
									<div class="your-top">
									<select name="htype" class="sel">
                                    <option value="s">Select</option>
										<option value="7" name="7">7 Star</option>
										<option value="5" name="5">5 Star</option>
                                        <option value="3" name="3">3 Star</option>
                                        <option value="mc" name="mc">multicuisine Resturent</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
                                <br>
								<br><P>Website URL</P><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="text" name="urll" placeholder="Website URL"  required >								
									<div class="clearfix"> </div>
									</div>
                                     
									 <br><P>Email</P>
									<div class="your-top">
									<i class="glyphicon glyphicon-envelope"> </i>
									<input type="text" name="email" placeholder="abc123_@mail.com"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">								
									<div class="clearfix"> </div>
									</div>
										<br><P>Confirm Password</P>
									<br><div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="password" name="cpassword" placeholder="Confirm Password"  required>								
									<div class="clearfix"> </div>
									</div>
                                    <br>
                                    <br><P>Map</P>
									<div class="your-top">
									<i class="glyphicon glyphicon-map-marker"> </i>
									<input type="text" name="map" placeholder="Give your hotel map URL"  required >								
									<div class="clearfix"> </div>
									</div>
									<br><P>Mobile</P>
									<br><div class="your-top">
									<i class="glyphicon glyphicon-phone"> </i>
									<input type="text" name="mobileno" placeholder="Mobile Number"  required>								
									<div class="clearfix"> </div>
									</div>
                  	                <br><P>Address</P><br>
									<br><div class="your-top">
									<textarea name="address"  placeholder="Address"  required></textarea>                              
									<i class="glyphicon glyphicon-pencil"> </i>
									<div class="clearfix"> </div>
									</div>
                                    <br><P>City</P>
                                    <br><div class="your-top">
									<i class="glyphicon glyphicon-pencil"> </i>
									<input type="text" name="city" placeholder="City"  required>								
									<div class="clearfix"> </div>
									</div>
                                    <br><P>State</P>
                                   <br><div class="your-top">
									<i class="glyphicon glyphicon-pencil"> </i>
									<input type="text" name="state" placeholder="State"  required>								
									<div class="clearfix"> </div>
									</div>
									<br>
									<br><P>PINcode</P>
									<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="pin" placeholder="PIN number"  required>								
									<div class="clearfix"> </div>
									</div>
								</div>
								
							</div></div>
							<div class="container"><div class="contact-grids">
                            <div class="col-md-6 grid-contact">
								    <h3><b>Specification</b></h3><br>
									<br><P>Free Cancellation</P><br>
									<div class="your-top">
									<select name="fc" class="sel">
										<option value="0" name="fca">Available</option>
										<option value="1" name="fcna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Pay At Hotel</P><br>
									<div class="your-top">
									<select name="payh" class="sel">
										<option value="0" name="paya">Available</option>
										<option value="1" name="payna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Free-WiFi</P><br>
									<div class="your-top">
									<select name="wifih" class="sel">
										<option value="1"  name="wifia">Available</option>
										<option value="0" name="wifina">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Transportation</P><br>
									<div class="your-top">
									<select name="th"class="sel">
										<option value="1" name="ta">Available</option>
										<option value="0" name="tna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Gym</P><br>
									<div class="your-top">
									<select name="gymh" class="sel">
										<option value="1" name="gyma">Available</option>
										<option value="0" name="gymna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Swimming Pool</P><br>
									<div class="your-top">
									<select name="poolh" class="sel">
										<option value="1" name="poola">Available</option>
										<option value="0" name="poolna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>24hrs Cafe</P><br>
									<div class="your-top">
									<select name="cafeh" class="sel">
										<option value="1" name="cafea">Available</option>
										<option value="0" name="cafena">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Parking</P>
									<div class="your-top">
									<select name="ph" class="sel">
										<option value="1" name="para">Available</option>
										<option value="0" name="parna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
                                
                         <!--       <br><P>Images</P><br>
									<div class="your-top"> 
								 	 <input type="file" name="images[]" multiple="multiple" accept="image/*" >
                                     									<div class="clearfix"> </div>							
								 </div> -->
                                
                             </div>
							 <div class="col-md-6 grid-contact-in">
								<h3><b> ROOM DETAILS</b></h3><br><br><br>
								<br><P>No. of Standard rooms</P>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="std_room" placeholder="Give number of Standard Type Room" >								
									<div class="clearfix"> </div>
									<br><P>Price of Standard rooms</P>
								</div><br><br><div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="std_room_pri" placeholder="Price of standard room" >								
									<div class="clearfix"> </div>
								</div><br><br>
								<br><P>No. of Deluxe rooms</P>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="deluxe_room" placeholder="Give number of DELUXE Type Room"  >								
									<div class="clearfix"> </div>
								</div><br><br>
								<br><P>Price of Deluxe rooms</P>
								<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="deluxe_room_pri" placeholder="Price of deluxe room"  >								
									<div class="clearfix"> </div>
								</div><br><br>
								<br><P>no. of Quad rooms</P>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="quad_room" placeholder="Give number of Quad Type Room"  >								
									<div class="clearfix"> </div>
								</div><br><br>
								<br><P>Price of Quad rooms</P>
								<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="quad_room_pri" placeholder="Price of quad room"  >								
									<div class="clearfix"> </div>
								</div><br><br>
								<br><P>No of Suite rooms</P>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="suite_room" placeholder="Give number of Sutie Type Room">								
									<div class="clearfix"> </div>
								</div><br><br>
								<br><P>Price of Suite rooms</P>
								<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="suite_room_pri" placeholder="Price of suite room">								
									<div class="clearfix"> </div>
								</div><br><br>
								<br><P>No. of tables</P>
								<div class="your-top">
									<i class="glyphicon glyphicon-cutlery"></i>
									<input type="text" name="ttable" placeholder="Give Total tables"  required>								
									<div class="clearfix"> </div>
								</div>
								<br><P>Password</P>
								<div class="your-top">
									<i class="glyphicon glyphicon-cutlery"></i>
									<input type="password" name="password" placeholder="Password has to be alphanumeric"  required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">								
									<div class="clearfix"> </div>
								</div>
								<br><P>Confirm Password</P>
								<div class="your-top">
									<i class="glyphicon glyphicon-cutlery"></i>
									<input type="password" name="cpassword" placeholder="Retype Password"  required >								
									<div class="clearfix"> </div>
								</div>
								</div>
							</div></div>
							<div class="container"><div class="contact-grids">
							<div class="col-md-6 grid-contact">
								<br><h3><b>Public Transport</b></h3>
								<br><P>Nearest Airport</P>
								<br><div class="your-top">
									<i class="glyphicon glyphicon-plane"></i>
									<input type="text" name="airport" placeholder="Give nearest Airport to your hotel" >								
									<div class="clearfix"> </div>
								</div>
								<br><P>Nearest Railways</P>
								<div class="your-top">
									
								    <i class="glyphicon glyphicon-bed"></i>
									<input type="text" name="railway" placeholder="Give nearest Railway to your hotel"  >								
									<div class="clearfix"> </div>
								</div>
								<br><P>Nearest Bus terminus</P>
								<div class="your-top">
							
								    <i class="glyphicon glyphicon-road"></i>
										
									<input type="text" name="bus" placeholder="Give nearest Bus Terminus to your hotel"  >								
									<div class="clearfix"> </div>
								</div>
								<br><P>Nearest Hospitals</P>
								<div class="your-top">
									 <i class="glyphicon glyphicon-header"></i>
									<input type="text" name="hospitals" placeholder="Give nearest Hospital to your hotel"  >								
									<div class="clearfix"> </div>
								</div>
								
								<br>
								<br>
								<div class="col-md-12 grid-contact-in">
								<input type="submit" value="Submit" name="Submit">
								</div>
							</div>
							</div>
							</div>
</form> 
<?php } ?>
						
				</div>
			</html>
            
            
            
       