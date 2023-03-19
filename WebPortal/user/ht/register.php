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
	<div class="contact"  id="contact">
				
					<h3 class="tittle">Hotel Registration</h3>
					
						<form action="register.php" method="post">
								<div class="container"><div class="contact-grids">
								<div class="col-md-8 grid-contact">
							
									<h3><b> Hotel Information </b></h3>
									<br><div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="text" name="name" placeholder="Hotel Name"  required >		  <?php if(isset($errname)) echo $errname; ?>								
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
                                <br><div class="your-top">
									<i class="glyphicon glyphicon-user"> </i>
									<input type="text" name="urll" placeholder="Website URL"  required >	
                                       <?php if(isset($errurl)) echo $errurl; ?>								
									<div class="clearfix"> </div>
									</div>
                                     <br>
									<div class="your-top">
									<i class="glyphicon glyphicon-envelope"> </i>
									<input type="text" name="email" placeholder="E-mail"  required>	
                                      <?php if(isset($erremail)) echo $erremail; ?>								
									<div class="clearfix"> </div>
									</div>
									<br><div class="your-top">
									<i class="glyphicon glyphicon-phone"> </i>
									<input type="text" name="mobileno" placeholder="Mobile Number"  required>
                                       <?php if(isset($errmob)) echo $errmob; ?>									
									<div class="clearfix"> </div>
									</div>
                  	
									<br><div class="your-top">
									<textarea name="address"  placeholder="Address"  required></textarea>                              
									<i class="glyphicon glyphicon-pencil"> </i>
									<div class="clearfix"> </div>
									</div>
                                    
                                    <br><div class="your-top">
									<i class="glyphicon glyphicon-pencil"> </i>
									<input type="text" name="city" placeholder="City"  required>								
									<div class="clearfix"> </div>
									</div>
                                    
                                   <br><div class="your-top">
									<i class="glyphicon glyphicon-pencil"> </i>
									<input type="text" name="state" placeholder="State"  required>								
									<div class="clearfix"> </div>
									</div>
									<br><div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="pin" placeholder="PIN number"  required>								
									<div class="clearfix"> </div>
									</div>
								
									<br><div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="password" name="password" placeholder="Password"  required>								
									<div class="clearfix"> </div>
									</div>
									<br><div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="password" name="cpassword" placeholder="Confirm Password"  required>
                                     <?php if(isset($errcpass)) echo $errcpass; ?>									
									<div class="clearfix"> </div>
									</div>
                                    <br>
                                    <div class="your-top">
									<i class="glyphicon glyphicon-map-marker"> </i>
									<input type="text" name="map" placeholder="Give your hotel map URL"  required >								
									<div class="clearfix"> </div>
									</div>
									<br><div class="your-top">
									<i class="glyphicon glyphicon-map-marker"> </i>
									<input type="text" name="offer" placeholder="Any offer"  required >								
									<div class="clearfix"> </div>
									</div>
									 <br><div class="your-top">
									<i class="glyphicon glyphicon-map-marker"> </i>
									<input type="text" name="price" placeholder="Give your hotel room price"  required >								
									<div class="clearfix"> </div>
									</div>
									<br><div class="your-top">
									<i class="glyphicon glyphicon-map-marker"> </i>
									<input type="text" name="total_no_of_rooms" placeholder="Total no of rooms"  required >								
									<div class="clearfix"> </div>
									</div>
									 
								</div>
								
							</div></div>
							<div class="container"><div class="contact-grids">
                            <div class="col-md-6 grid-contact">

									<br><P>Restaurant</P><br>
									<div class="your-top">
										<select name="restaurant" class="sel">
										<option value="frava" name="fca">Available</option>
										<option value="frnot_ava" name="fcna">Not Available</option>
									</select>								
									<div class="clearfix"> </div>
									</div>
									<br>

								    <h3><b>Specification</b></h3><br>
									<br><P>Free Cancellation</P><br>
									<div class="your-top">
									<select name="fc" class="sel">
										<option value="frava" name="fca">Available</option>
										<option value="frnot_ava" name="fcna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Pay At Hotel</P><br>
									<div class="your-top">
									<select name="payh" class="sel">
										<option value="pava" name="paya">Available</option>
										<option value="pnot_ava" name="payna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Free-WiFi</P><br>
									<div class="your-top">
									<select name="wifih" class="sel">
										<option value="fava"  name="wifia">Available</option>
										<option value="fnot_ava"name="wifina">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Transportation</P><br>
									<div class="your-top">
									<select name="th"class="sel">
										<option value="tava" name="ta">Available</option>
										<option value="tnot_ava" name="tna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Gym</P><br>
									<div class="your-top">
									<select name="gymh" class="sel">
										<option value="gava" name="gyma">Available</option>
										<option value="gnot_ava" name="gymna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Swimming Pool</P><br>
									<div class="your-top">
									<select name="poolh" class="sel">
										<option value="sava" name="poola">Available</option>
										<option value="snot_ava" name="poolna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>24hrs Cafe</P><br>
									<div class="your-top">
									<select name="cafeh" class="sel">
										<option value="cava" name="cafea">Available</option>
										<option value="cnot_ava" name="cafena">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
								<br><P>Parking</P><br>
									<div class="your-top">
									<select name="ph" class="sel">
										<option value="paava" name="para">Available</option>
										<option value="panot_ava" name="parna">Not Available</option>
									</select>	
									<div class="clearfix"> </div>									
								</div>
                                

                                
                             </div>
							 <div class="col-md-6 grid-contact-in">
								<h3><b> ROOM DETAILS</b></h3><br><br><br>
								<br><div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="std_room" placeholder="Give number of Standard Type Room" >
                                    <?php if(isset($errstd)) echo $errstd; ?>														
									<div class="clearfix"> </div>
								</div><br><br><div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="std_room_pri" placeholder="Price of standard room" >	
                                    <?php if(isset($errsp)) echo $errsp; ?>													
									<div class="clearfix"> </div>
								</div><br><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="deluxe_room" placeholder="Give number of DELUXE Type Room"  >
                                    <?php if(isset($errdel)) echo $errdel; ?>
									<div class="clearfix"> </div>
								</div><br><br>
								<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="deluxe_room_pri" placeholder="Price of deluxe room"  >	<?php if(isset($errdp)) echo $errdp; ?>													
									<div class="clearfix"> </div>
								</div><br><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="quad_room" placeholder="Give number of Quad Type Room"  >
                                    <?php if(isset($errqd)) echo $errqd; ?>														
									<div class="clearfix"> </div>
								</div><br><br>
								<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="quad_room_pri" placeholder="Price of quad room"  >	
                                    <?php if(isset($errqp)) echo $errqp; ?>													
									<div class="clearfix"> </div>
								</div><br><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-user"></i>
									<input type="text" name="suite_room" placeholder="Give number of Sutie Type Room">
                                    <?php if(isset($errsu)) echo $errsu; ?>														
									<div class="clearfix"> </div>
								</div><br><br>
								<div class="your-top">
									<i class="fa fa-inr" style="font-size:20px"></i>
									<input type="text" name="suite_room_pri" placeholder="Price of suite room">	
                                    <?php if(isset($errsup)) echo $errsup; ?>													
									<div class="clearfix"> </div>
								</div><br><br>
								<div class="your-top">
									<i class="glyphicon glyphicon-cutlery"></i>
									<input type="text" name="ttable" placeholder="Give Total tables"  required>	
                                    <?php if(isset($errtt)) echo $errtt; ?>													
									<div class="clearfix"> </div>

								</div>
								</div>
							</div></div>
							<div class="container"><div class="contact-grids">
							<div class="col-md-6 grid-contact">
								<br><h3><b>Public Transport</b></h3>
								<br><div class="your-top">
									<i class="glyphicon glyphicon-plane"></i>
									<input type="text" name="airport" placeholder="Give nearest Airport to your hotel" >								
									<div class="clearfix"> </div>
								</div>
								
								<div class="your-top">
									
								    <i class="glyphicon glyphicon-bed"></i>
									<input type="text" name="railway" placeholder="Give nearest Railway to your hotel"  >								
									<div class="clearfix"> </div>
								</div>
								<div class="your-top">
							
								    <i class="glyphicon glyphicon-road"></i>
										
									<input type="text" name="bus" placeholder="Give nearest Bus Terminus to your hotel"  >								
									<div class="clearfix"> </div>
								</div>
								<div class="your-top">
									 <i class="glyphicon glyphicon-header"></i>
									<input type="text" name="hospitals" placeholder="Give nearest Hospital to your hotel"  >								
									<div class="clearfix"> </div>
								</div>
								
								<br>
								<br>
								<div class="col-md-12 grid-contact-in">
								<input type="submit" value="Submit" name="submit">
							</form>
								</div>
								
							</div>
							</div>
							</div>

							
						
				</div>
                <?php


/*$errurl="";
$erremail="";
$errmob="";

$errcpass="";
$errstd="";
$errsp="";
$errdel="";
$errdp="";
$errqd="";
$errqp="";
$errsu="";
$errsup="";
$errtt="";*/


if(isset($_POST['submit']))
{
 /*if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["name"]) === 0){
      $errname = "Please enter your full name";	
	
	if(preg_match("/^\d{3}-\d{7}$/", $_POST["mobileno"]) === 0){
      $errmob = "enter a valid mobile no";
	  
	 if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$erremail = "enter a valid UserEmail";
	

if($_POST["password"] == $_POST["cpassword"]){
	//$msg = $cpassword; 
	$errcpass='password matched';
//$d= "invalid cpassword";	
if(preg_match( "/^(http|https):\\/\\/[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i",$_POST["urll"])===0)
{
  $errurl =" enter a valid url";
  
  if (preg_match("/^[0-9]*$/", $_POST["std_room"])===0 ) {
	  
	  $errstd="enter in numbers";
	  
	  if (preg_match("/^[0-9]*$/", $_POST["std_room_pri"])=== 0) {
		  $errsp="enter in numbers";
		  
		  if (preg_match("/^[0-9]*$/", $_POST["deluxe_room"])=== 0) {
			 
			  $errdel="enter in numbers";
			  if (preg_match("/^[0-9]*$/",$_POST["deluxe_room_pri"])===0) {
				 $errdp="enter in numbers";
				  
				  if (preg_match("/^[0-9]*$/",$_POST["suite_room"])===0) {
					  $errsu="enter in numbers";
					  if (preg_match("/^[0-9]*$/",$_POST["suite_room_pri"])===0) {
						  $errsp="enter in numbers";
						  if (preg_match("/^[0-9]*$/", $_POST["quad_room"])===0) {
							   $errqd="enter in numbers";
							  if (preg_match("/^[0-9]*$/", $_POST["quad_room_pri"])===0) {
	 $errqp="enter in numbers";
	 
	 if (preg_match("/^[0-9]*$/", $_POST["ttable"])===0) {
	 $errtt="enter in numbers";
//include_once 'connect.php'; */  
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
	 // echo "connected";

  }


$hotel_name=$_POST['name'];
$type_of_hotel=$_POST['htype'];
$state=$_POST['state'];
$city=$_POST['city'];
$address=$_POST['address'];
$pincode=$_POST['pin'];
$map=$_POST['map'];
$free_cancellation=$_POST['fc'];
$pay_at_hotel=$_POST['payh'];
$free_wifi=$_POST['wifih'];
$free_cab=$_POST['th'];
$gym=$_POST['gymh'];
$swimming_pool=$_POST['poolh'];
$cafe=$_POST['cafeh'];

$parking=$_POST['ph'];
$airport=$_POST['airport'];
$railway=$_POST['railway'];
$bus_stop=$_POST['bus'];
$hospital=$_POST['hospitals'];
$standard=$_POST['std_room'];
$deluxe=$_POST['deluxe_room'];
$suite=$_POST['suite_room'];
$quad=$_POST['quad_room'];
$no_of_tables=$_POST['ttable'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];
$mobile=$_POST['mobileno'];
$website=$_POST['urll'];

$standardprice=$_POST['std_room_pri'];
$deluxeprice=$_POST['deluxe_room_pri'];
$quadprice=$_POST['quad_room_pri'];
$suiteprice=$_POST['suite_room_pri'];
$price=$_POST['price'];
$offer=$_POST['offer'];
$total_no_of_rooms=$_POST['total_no_of_rooms'];
$restaurant=$_POST['restaurant'];
$img = $_FILES['img'];

$ins ="INSERT INTO hotel(hotel_id,hotel_name,state,city,address,pincode,map,free_cancellation,pay_at_hotel,free_wifi,free_cab,gym,swimming_pool,cafe,parking,airport,railway,hospital,bus_stop,type_of_hotel,standard,deluxe,suite,quad,no_of_tables,password,cpassword,email,mobile,website,standardprice,deluxeprice,quadprice,suiteprice,offer,price,total_no_of_rooms,restaurant) VALUES
('$hotel_id','$hotel_name','$state','$city','$address','$pincode','$map','$free_cancellation','$pay_at_hotel','$free_wifi','$free_cab','$gym','$swimming_pool','$cafe',
'$parking','$airport','$railway','$hospital','$bus_stop','$type_of_hotel','$standard','$deluxe','$suite','$quad','$no_of_tables','$password','$cpassword','$email',
'$mobile','$website','$standardprice','$deluxeprice','$quadprice','$suiteprice','$offer','$price','$total_no_of_rooms','$restaurant')";

if($con->query($ins)==TRUE)
{
	echo "<script>alert('Press OK for image upload');</script>";
	echo "<script>
window.location = 'upload_img.php';
</script>";
	

//echo "<script>alert('You are Registered Successfully THANKYOU');
 //echo <a href='upload_img.php'>;
//echo "inserted";
//echo "<br>";
    
}
else
{
	echo "not inserted".$con->error;
	}

/*
}else{ echo "not a valid  no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid  no";}
}else{ echo "not a valid  no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid no";}
}else{ echo "not a valid url";}
}else{ echo "password doesnt match";}
}else { echo "not a valid email id";}
}else { echo "not a valid mobile number";}
}else { echo "not a valid username";}

}*/	
}
?>
			</html>
            
            
            
       
