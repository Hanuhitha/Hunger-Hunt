<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>miniGallery</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link href="css/master.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 7]><link href="css/ie7-only.css" rel="stylesheet" type="text/css" media=screen><![endif]-->
<!--[if lt IE 7]><link href="css/ie6-only.css" rel="stylesheet" type="text/css" media=screen><![endif]-->
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style1.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:10000,
				preset:'zoomer',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})
		});
	</script>
<script type="text/javascript" src="js/yetii-min.js"></script>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
die("can not connect:".mysql_error());

}
mysql_select_db("hotelbooking",$con);
$hid=$_POST['hidden'];

$sql = "SELECT * FROM hotel where hotel_name='$hid'";
$mydata = mysql_query($sql,$con);
while($record = mysql_fetch_array($mydata))
{
?>
<div class="container header">
  <h1><a href="<?php $record['website']?>"><?php echo $record['hotel_name'];    ?></a></h1>

</div>
<div class="bg-1">
    <header>
    	<div class="main">
        	
            <div id="slide">		
                <div class="slider">
                    <ul class="items">
                        <li><img src="images/slider-1.jpg" alt="" /></li>
                        <li><img src="images/slider-2.jpg" alt="" /></li>
                        <li><img src="images/slider-3.jpg" alt="" /></li>
                     
                    </ul>
              </div>	
                <a href="#" class="prev"></a><a href="#" class="next"></a>
          </div> 
        </div>
    </header>  
	<div class="outer" style="width:100%">
    <div class="inner" style="  margin: 0 auto; padding:4px; box-shadow:0 0 3px 1px #cbcccc; position:relative;width:958px;height:100%;-webkit-border-radius: 0px 99px 0px 99px;-moz-border-radius: 0px 99px 0px 99px;border-radius: 0px 99px 0px 99px;background-color:#30CBE3;-webkit-box-shadow: #575CFF 10px 10px 10px inset;-moz-box-shadow: #575CFF 10px 10px 10px inset; box-shadow: #575CFF 10px 10px 10px inset;">
	<?php
	echo "<br><br>";
	echo "<table border=1>
<tr>";
echo "<td>HOTEL NAME<td>";
echo "<td>:".$record['hotel_name']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>HOTEL ADDRESS<td>";
echo "<td>:".$record['address']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>CITY<td>";
echo "<td>:".$record['city']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>STATE<td>";
echo "<td>:".$record['state']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>PINCODE<td>";
echo "<td>:".$record['pincode']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>WEBSITE<td>";
echo "<td>:".$record['website']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>EMAIL<td>";
echo "<td>:".$record['email']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>PHONE NUMBER<td>";
echo "<td>:".$record['mobile']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>MAP<td>";
echo "<td>:".$record['map']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>RATING<td>";
echo "<td>:".$record['star']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>FREE CANCELLATION<td>";
echo "<td>:".$record['free_cancellation']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>PAY AT HOTEL<td>";
echo "<td>:".$record['pay_at_hotel']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>FREE WIFI<td>";
echo "<td>:".$record['free_wifi']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>FITNESS CENTER<td>";
echo "<td>:".$record['gym']."<td>";
echo "</tr>";



echo "<tr>";
echo "<td>RESTAURENT<td>";
echo "<td>:".$record['cafe']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>PARKING SPACE<td>";
echo "<td>:".$record['parking']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>
<b><u>NEAR PLACES:</u></b><br>AIRPORT<td>";
echo "<td>:".$record['airport']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>RAILWAY<td>";
echo "<td>:".$record['railway']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>HOSPITAL<td>";
echo "<td>:".$record['hospital']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>BUS STOP<td>";
echo "<td>:".$record['bus_stop']."<td>";
echo "</tr>";
echo "</table>";


?>
	</div>
	</div>
<?php
}
?>
<div>





</div>
<script type="text/javascript">
var tabber1 = new Yetii({
id: 'tab-container-1'
});
</script>
</body>
</html>
