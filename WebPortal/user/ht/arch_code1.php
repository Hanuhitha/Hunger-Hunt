<html>
<title>Product search filtering using php and ajax - Mostlikers</title>
<head>
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>
<body>
<?php
    $db= mysql_connect('localhost','root',''); 
    
?>
<br>
<br>
<br>
<div class="container">
     <div class="column">      
        <div class="col-sm-3 col-md-3">
          <form id="search_form">
            <div class="well">
                <h2 class="font_sts"><b>        Range</b></h3><br>
<form action="">
<p class="font_sts"><input type="checkbox" name="range[]" value="high">High</p><br>
<p class="font_sts"><input type="checkbox" name="range[]" value="medium">Medium</p> <br>
<p class="font_sts"><input type="checkbox" name="range[]" value="low">Low</p><br>


<br><br>
<h2 class="font_sts"><b>Location Specification</b></h3><br>

<p class="font_sts"><input type="checkbox" class="airport" name="loc_air" value="airport">Airport</p><br>
<p class="font_sts"><input type="checkbox" class="railway" name="loc_railway" value="railway">Railway Station</p><br>
<p class="font_sts"><input type="checkbox" class="bus" name="loc_bus" value="bus_terminus">Bus Terminus</p><br>
<p class="font_sts"><input type="checkbox" class="hospital" name="loc_hospital" value="hospital">Hospital</p><br>



<br><br>
<h2 class="font_sts"><b>Offers</b></h3><br>

<p class="font_sts"><input type="checkbox" class="off" name="offer[]" value="10">10%</p><br>
<p class="font_sts"><input type="checkbox" class="off" name="offer[]" value="15">15%</p><br>
<p class="font_sts"><input type="checkbox" class="off" name="offer[]" value="20">20%</p><br>
<p class="font_sts"><input type="checkbox" class="off" name="offer[]" value="25">25%</p><br>
<p class="font_sts"><input type="checkbox" class="off" name="offer[]" value="30">30%</p><br>
<p class="font_sts"><input type="checkbox" class="off" name="offer[]" value="50">50%</p><br>
<p class="font_sts"><input type="checkbox" class="off" name="offer[]" value="More_50">More than 50%</p><br>







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

<p class="font_sts"><input type="checkbox" class="fec_can" name="fec_can" value="cancel">Free cancellation</p><br>
<p class="font_sts"><input type="checkbox" class="fec_pay" name="fec_pay" value="pay_hotel">Pay at Hotel</p><br>
<p class="font_sts"><input type="checkbox" class="fec_wifi" name="fec_wifi" value="free_wifi">Free WIFI</p><br>
<p class="font_sts"><input type="checkbox" class="fec_cab" name="fec_cab" value="airport_drop">Airport Drop</p><br>
<p class="font_sts"><input type="checkbox" class="fec_gym" name="fec_gym" value="gym">Gym</p><br>
<p class="font_sts"><input type="checkbox" class="fec_pool" name="fec_pool" value="pool">Swimming Pool</p><br>

</form>
</div>
            </div>
          </form>
        </div>
		
       <!-- <div class="col-sm-3 col-md-3">
         <h4>E-commerce product sort search using php and ajax with boostrap.</h4><br>
         <p class="text-center">Demo <a href="http://www.mostlikers.com/2015/08/product-search-filtering-using-php-and.html">Tutorial Link</a>
          - mostlikers blog <a href="http://www.mostlikers.com/">mostlikers.com</a></p> 
        </div>
    </div>   -->
	
	<?php
	mysql_select_db("hotelbooking",$db);
$place=$_POST['loc'];
$in=$_POST['check-in'];
$out=$_POST['check-out'];
$sql = "SELECT * FROM hotel where city='$place'";
$mydata = mysql_query($sql,$db);

        
$sql1 = "SELECT * FROM rooms ";
$mydata1 = mysql_query($sql1,$db);
$count=0;
$r_no_of_rooms=0;
while($record = mysql_fetch_array($mydata))
 {
	
	$total=$record['total_no_of_rooms'];
	$email=$record['email'];
	echo "total: ".$total."<br>";
  echo "ame:".$record['hotel_name'];
	
$sql1 = "SELECT * FROM rooms where email = '$email' ";
$mydata1 = mysql_query($sql1,$db);
	while($record1 = mysql_fetch_array($mydata1)){
		
		$r_email=$record1['email'];
		$r_in=$record1['in_date'];
		$r_out=$record1['out_date'];
		$r_no_of_rooms=$record['no_of_rooms'];
		
			//echo $record['hotel_name'];
			if(strtotime($in) >= strtotime($r_out)){
				//echo $in. "<br>";
				//echo $out. "<br>";
				$count = $count + 1;
				$r_no_of_rooms= $r_no_of_rooms+1;
			}
		
		
	}
	//echo "count: ".$count;
	$res=$total-$r_no_of_rooms;
	echo "res(before if): ".$res;
	if($res != 0)
	{?>
		 <div class="row">
      <div class="ajax_result">
     	
        <div class="col-sm-3 col-md-4">
        	<div class="well">
        		<h2 class="text-info"><?php echo $record['hotel_name']; ?></h2>
        		<p><span class="label label-info label-lg">Address : <?php echo $record['address']; ?></span></p>        		         
        		<p><?php echo $record['city']; ?></p>
        		<hr>
        		<h3>$<?php echo $record['price']; ?> / Day</h3>
        		<hr>
              <p><a class="btn btn-info" href="#"><i class="icon-ok"></i>View Hotel</a></p>
        	</div>
        </div>        
        
      
     </div>
	</div>

<?php } ?>
	
	<!--<div class="row">
      <div class="ajax_result">
      
        <div class="col-sm-3 col-md-4">
        	<div class="well">
        		<h2 class="text-info"><?php echo $record['hotel_name']; ?></h2>
        		<p><span class="label label-info label-lg">Address : <?php echo $record['address']; ?></span></p>        		         
        		<p><?php echo $record['city']; ?></p>
        		<hr>
        		<h3>$<?php echo $record['price']; ?> / Day</h3>
        		<hr>
              <p><a class="btn btn-info" href="#"><i class="icon-ok"></i>View Hotel</a></p>
        	</div>
        </div>        
       
   
       
     </div>
	</div>  --><?php
	
}?>

</body>
</html>
<script>

$(document).on('change','.airport',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.off',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.railway',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.bus',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.hospital',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.fec_pool',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.fec_gym',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.fec_cab',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.fec_wifi',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.fec_pay',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});

$(document).on('change','.fec_can',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});
</script>