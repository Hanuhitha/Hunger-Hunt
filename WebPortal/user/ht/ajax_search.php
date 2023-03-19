<?php
    $db=new mysqli('localhost','root','','hotelbooking');
    $sql="SELECT * FROM temp_hotel";
   
    extract($_POST);
    if(isset($loc_air)) 
    	$sql.=" WHERE airport !=' ' ";
	if(isset($loc_bus)) 
    	$sql.=" OR bus_stop != ' ')";
	if(isset($loc_railway)) 
    	$sql.=" OR railway != ' '";
	if(isset($loc_hospital)) 
    	$sql.=" OR hospital != ' '";
	if(isset($offer)) 
    	$sql.=" OR offer IN (".implode(',', $offer).")";
	if(isset($fec_can)) 
    	$sql.=" OR free_cancellation = 'Available'";
	if(isset($fec_pay)) 
    	$sql.=" OR pay_at_hotel = 'Available'";
	if(isset($fec_wifi)) 
    	$sql.=" OR free_wifi = 'Available'";
    if(isset($fec_cab)) 
        $sql.=" OR free_cab = 'Available'";
    if(isset($fec_gym)) 
        $sql.=" OR gym = 'Available'";
    if(isset($fec_pool)) 
        $sql.=" OR swimming_pool = 'Available'";
     if(isset($range1)) 
        $sql.=" OR price > 10000 ";
     if(isset($range2)) 
        $sql.=" OR price > 5000 && price < 10000";
     if(isset($range3)) 
        $sql.=" OR price < 5000";

    $all_row=$db->query($sql);
?>
<?php if(isset($all_row) && is_object($all_row) && count($all_row)): $i=1;?>
    <?php foreach ($all_row as $key => $product) { ?>		
    <div class="col-sm-3 col-md-3">
    	<div class="well">
    		<h2 class="text-info"><?php echo $product['hotel_name']; ?></h2>
    		<p><span class="label label-info">Address : <?php echo $product['address']; ?></span></p>        		         
    		<p><?php echo $product['city']; ?></p>
    		<hr>
    		<h3>Rs <?php echo $product['price']; ?> / Day</h3>
    		<hr>
             <form method="post" action="third_table.php" >
          <!--<p><a class="btn btn-info" href="#"><i class="icon-ok"></i>View Hotel</a></p>-->
           <input type="hidden" name="hidden" value="<?php echo $product['hotel_name'] ;?>" />
        <input name="hotel_btn" type="submit"  class="btn btn-info" value="View Hotel">
        </form>
    	</div>
    </div>
   <?php } ?>
<?php endif; ?>
    <div class="col-sm-3 col-md-3">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- edgead3 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-9665679251236729"
                 data-ad-slot="3409485426"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
    </div>