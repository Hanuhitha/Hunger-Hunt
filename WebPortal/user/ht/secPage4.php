<!DOCTYPE html>
<html>
<head>
<title>Plan Your Trip</title>
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
								<h1><a href="index.php"><span>Trip</span> Guide</a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav cl-effect-11">
							<!--<li class="active"><a href="index.php" data-hover="Home" class="scroll">Home </a></li>
							<li><a href="#about" data-hover="About" class="scroll"></a></li>-->
							<!--<li><a href="#tours" data-hover="Tours" class="scroll">Tours</a></li>-->
								
							<!--<li><a href="#services" data-hover="Services" class="scroll">Services</a></li>
							<li><a data-hover="News" href="#news" class="scroll">News</a></li>
							  <li><a  href="#guides" data-hover="Guides" class="scroll">Guides</a></li> -->
 <li><a  href="#hotel" data-hover="Offers">Offers</a></li> 
							 <li><a data-hover="Login" >Login</a></li>
							 
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	


	
  
		</div> 
	</div>
<br>


<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<div float="right" class="background" >
<h2 class="font_sts"><b>        Range</b></h3><br>
<form action="">
<br><br>
<h2 class="font_sts"><b>Location Specification</b></h3><br>

<p class="font_sts"><input type="checkbox" name="loc_air" value="airport">Airport</p><br>
<p class="font_sts"><input type="checkbox" name="loc_railway" value="railway">Railway Station</p><br>
<p class="font_sts"><input type="checkbox" name="loc_bus" value="bus_terminus">Bus Terminus</p><br>
<p class="font_sts"><input type="checkbox" name="loc_hospital" value="hospital">Hospital</p><br>



<br><br>
<h2 class="font_sts"><b>Offers</b></h3><br>

<p class="font_sts"><input type="checkbox" name="off" value="10">10%</p><br>
<p class="font_sts"><input type="checkbox" name="off" value="15">15%</p><br>
<p class="font_sts"><input type="checkbox" name="off" value="20">20%</p><br>
<p class="font_sts"><input type="checkbox" name="off" value="25">25%</p><br>
<p class="font_sts"><input type="checkbox" name="off" value="30">30%</p><br>
<p class="font_sts"><input type="checkbox" name="off" value="50">50%</p><br>
<p class="font_sts"><input type="checkbox" name="off" value="More_50">More than 50%</p><br>







<br><br>
<h3  class="font_sts"><b>Star Rating</b></h3><br>



	<div class="stars">
		<input type="radio" name="star" class="star-1" id="star-1" />
		<label class="font_sts" for="star-1">1</label>
		<input type="radio" name="star" class="star-2" id="star-2" />
		<label class="font_sts" for="star-2">2</label>
		<input type="radio" name="star" class="star-3" id="star-3" />
		<label class="font_sts" for="star-3">3</label>
		<input type="radio" name="star" class="star-4" id="star-4" />
		<label class="font_sts" for="star-4">4</label>
		<input type="radio" name="star" class="star-5" id="star-5" />
		<label class="font_sts" for="star-5">5</label>
		<span></span>
	



</div>

<br><br>
<h3 class="font_sts"><b>Special Features</b></h3><br>

<p class="font_sts"><input type="checkbox" name="fec" value="cancel">Free cancellation</p><br>
<p class="font_sts"><input type="checkbox" name="fec" value="pay_hotel">Pay at Hotel</p><br>
<p class="font_sts"><input type="checkbox" name="fec" value="free_wifi">Free WIFI</p><br>
<p class="font_sts"><input type="checkbox" name="fec" value="airport_drop">Airport Drop</p><br>
<p class="font_sts"><input type="checkbox" name="fec" value="free_break">Free Breakfast</p><br>
<p class="font_sts"><input type="checkbox" name="fec" value="free_meals">Free Meals</p><br>
<p class="font_sts"><input type="checkbox" name="fec" value="free_dinner">Free Dinner</p><br>
<p class="font_sts"><input type="checkbox" name="fec" value="gym">Gym</p><br>
<p class="font_sts"><input type="checkbox" name="fec" value="pool">Swimming Pool</p><br>

</form>
</div>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--about---> 
<div class="article">
<br><br>
<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
die("can not connect:".mysql_error());

}
mysql_select_db("hotelbooking",$con);
$sql = "SELECT * FROM hotel";
$mydata = mysql_query($sql,$con);
while($record = mysql_fetch_array($mydata))
{
echo "<br>";

$a=$record['email'];
$b=$record['hotel_name'];
$c=$b.".jpg";

?>
<?php
mysql_select_db('hotelbooking') or die(mysql_error());

$select_path="select * from slideshow_image where email='$a' && image_name='$c'"; //providing image id

$var=mysql_query($select_path) or die(mysql_error());

while($row=mysql_fetch_array($var))
{
	
    $image_name=$row["image_name"];//image name 
    $image_path=$row["image_path"];//image path
    ?>

	<div class="first">
		<div class="second1">
			<img id="myImg" src="<?php echo $image_path; ?><?php echo $image_name; ?>"></img>
		</div>
		<!-- The Modal -->
<div id="myModal" class="modal" >
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<!-- end of model -->
<script>
var modal = document.getElementById('myModal');
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
</script>


		<div class="second2">
			<h4 class="mycss"><b><u><?php
			echo $record['hotel_name']."<br> </u></b>" ;
			$a= array($record['address'],$record['city'],$record['state'],$record['pincode']);
			echo implode(",",$a);

			?></h4>
			
			
			<form id="ratingsForm">
		<div class="stars">
			<input type="radio" name="star" class="star-1" id="star-1" />
			<label class="star-1" for="star-1">1</label>
			<input type="radio" name="star" class="star-2" id="star-2" />
			<label class="star-2" for="star-2">2</label>
			<input type="radio" name="star" class="star-3" id="star-3" />
			<label class="star-3" for="star-3">3</label>
			<input type="radio" name="star" class="star-4" id="star-4" />
			<label class="star-4" for="star-4">4</label>
			<input type="radio" name="star" class="star-5" id="star-5" />
			<label class="star-5" for="star-5">5</label>
			<span></span>
		</div>
		</form>
		<br>
		<br>
		<p class="mycss"><b><u>With:</u></b><?php
		$str="";
			if($record['free_cancellation']=="Available")
			{
				//$array_push($b,"free cancellation");
				$str=$str."free cancellation,";
			}
			if($record['free_cab']=="Available")
			{
				//$array_push($b,"free cab");
				$str=$str."free cab,";
			}
			if($record['pay_at_hotel']=="Available")
			{
				//$array_push($b,"pay at hotel");
				$str=$str."pay at hotel,";
			}
			if($record['free_wifi']=="Available")
			{
				//$array_push($b,"free wifi");
				$str=$str."free wifi";
			}
			
			
			echo "".$str;
			
						
	    ?></p>
		
		</div>
		<div class="second3">
			
		<p>Price</p>
			 <!--<input class="btn" type="button" onClick="location.href='third.php'" value="Book hotel" name="book"> -->  
				<form method="post" action="third_table.php" >
				<!--<form method="post" action="new_third.php" >-->
				<input type="hidden" name="hidden" value="<?php echo $record['hotel_name'] ;?>" />
				<input name="hotel_btn" type="submit"  class = "btn" value="Book Hotel">
				</form> 
			
			
		</div>
	</div>
<?php

}
?>	
<?php
echo "<br>";
}
?>	
	
</div>
</div>
		</body>
</html>