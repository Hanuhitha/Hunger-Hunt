<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>miniGallery</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link href="css/master.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 7]><link href="css/ie7-only.css" rel="stylesheet" type="text/css" media=screen><![endif]-->
<!--[if lt IE 7]><link href="css/ie6-only.css" rel="stylesheet" type="text/css" media=screen><![endif]-->
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style3.css">
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
//$con = mysql_connect("localhost","root","");
$db=new mysqli('localhost','root','','hotelbooking');

$hid=$_POST['hidden'];

$sql = "SELECT * FROM hotel where hotel_name='$hid'";
//$mydata = mysql_query($sql,$con);
//$mydata=$db->query($sql)
//while($record = mysql_fetch_array($mydata))
//{
 $all_row1=$db->query($sql);
if($all_row1->num_rows>0)
 {
    while($record=$all_row1->fetch_assoc())
 {
	$a=$record['email'];
?>
<?php
//mysql_select_db('hotelbooking') or die(mysql_error());
$db=new mysqli('localhost','root','','hotelbooking');
$select_path="select * from slideshow_image where email='$a'"; //providing image id

$var=$db->query($select_path);
 $one="";
 $temp="aa";
 $two="";
 $three="";
//while($row=mysql_fetch_array($var))
//{
	
if($var->num_rows>0)
 {
    while($row=$var->fetch_assoc())
 {
    $image_name=$row["image_name"];//image name 
    $image_path=$row["image_path"];//image path
    if($one == NULL && $temp == "aa")
    {
    	$one=$row["image_name"];
     
    	$temp=$row["image_name"];
    	$t=0;
    }
    else if($one != NULL && $t == 0)
    {
    	$two=$row["image_name"];
    
    	$t=1;
    }
  else
    {

    	$three=$row["image_name"];
     
    }
}}
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
                        <<li><img src="<?php echo $image_path; ?><?php echo $two; ?>" alt="" /></li>
                       <li><img src="<?php echo $image_path; ?><?php echo $one; ?>" alt="" /></li>
                       <li><img src="<?php echo $image_path; ?><?php echo $three; ?>" alt="" /></li>
                       <!-- <li><img src="images/slider-3.jpg" alt="" /></li>-->
                    </ul>
              </div>	
                <a href="#" class="prev"></a><a href="#" class="next"></a>
          </div> 
        </div>
    </header>  
	<section>
    <div  class="tbl-content">
  <?php
  echo "<br><br>";
  echo "<table border=1>
<tr>";
echo "<td>HOTEL NAME<td>";
echo "<td>".$record['hotel_name']."<td>";
$hotelName=$record['hotel_name'];
echo "</tr>";

echo "<tr>";
echo "<td>HOTEL ADDRESS<td>";
echo "<td>".$record['address']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>CITY<td>";
echo "<td>".$record['city']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>STATE<td>";
echo "<td>".$record['state']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>PINCODE<td>";
echo "<td>".$record['pincode']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>WEBSITE<td>";
echo "<td>".$record['website']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>EMAIL<td>";
echo "<td>".$record['email']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>PHONE NUMBER<td>";
echo "<td>".$record['mobile']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>MAP<td>";
echo "<td>:".$record['map']."<td>";
echo "</tr>";



echo "<tr>";
echo "<td>FREE CANCELLATION<td>";
echo "<td>".$record['free_cancellation']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>PAY AT HOTEL<td>";
echo "<td>".$record['pay_at_hotel']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>FREE WIFI<td>";
echo "<td>".$record['free_wifi']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>FITNESS CENTER<td>";
echo "<td>".$record['gym']."<td>";
echo "</tr>";



echo "<tr>";
echo "<td>RESTAURENT<td>";
echo "<td>".$record['cafe']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>PARKING SPACE<td>";
echo "<td>".$record['parking']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>
<b><u>NEAR PLACES:</u></b><br>AIRPORT<td>";
echo "<td>".$record['airport']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>RAILWAY<td>";
echo "<td>".$record['railway']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>HOSPITAL<td>";
echo "<td>".$record['hospital']."<td>";
echo "</tr>";

echo "<tr>";
echo "<td>BUS STOP<td>";
echo "<td>".$record['bus_stop']."<td>";
echo "</tr>";
echo "</table>";


?>
  </div>
</section>
	</div>
<?php
}}
?>
<div>





</div>
<div float="right">
    
    <form method="post" action="fourth_page.php" >
        <!--<form method="post" action="new_third.php" >-->
        <input type="hidden" name="hidden" value="<?php echo $hotelName ;?>" />
        <div class="col-md-12 grid-contact-in">
        <input name="hotel_btn" type="submit" id="submit" class ="btn btn-info btn-lg" value="Book Hotel">
      </div>

        </form>
  </div>
<script type="text/javascript">
var tabber1 = new Yetii({
id: 'tab-container-1'
});
</script>
</body>
</html>
