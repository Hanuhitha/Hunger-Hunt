<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update bus set journey_date='$aa',travels='$vv',source='$bb',destination='$cc',type='$dd',depart_time='$ee',arrival_time='$ff',seats='$gg',price='$hh' where bus_id='".$_GET['bus_id']."'");
$err="<font color='blue'>Notice updated </font>";

}

//select old notice 

$q=mysqli_query($conn,"select * from bus where bus_id='".$_GET['bus_id']."'");
$res=mysqli_fetch_array($q);

?>
<h2>Update Notice</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">journey_Date</div>
		<div class="col-sm-5">
		<input type="text" name="aa" value="<?php echo $res['journey_date']; ?>" class="form-control"/></div>
	</div><br>
	
	
	
	
	<div class="row">
		<div class="col-sm-4">Travels</div>
		<div class="col-sm-5">
		
	<input type="text" name="vv" value="<?php echo $res['travels']; ?>" class="form-control"/></div>
	</div><br>

<div class="row">
		<div class="col-sm-4">Source</div>
		<div class="col-sm-5">
		<input type="text" name="bb" value="<?php echo $res['source']; ?>" class="form-control"/></div>
	</div><br>
<div class="row">
		<div class="col-sm-4">Destination</div>
		<div class="col-sm-5">
		<input type="text" name="cc" value="<?php echo $res['destination']; ?>" class="form-control"/></div>
	</div><br>
<div class="row">
		<div class="col-sm-4">Type</div>
		<div class="col-sm-5">
		<input type="text" name="dd" value="<?php echo $res['type']; ?>" class="form-control"/></div>
	</div><br>
<div class="row">
		<div class="col-sm-4">Depart_Time</div>
		<div class="col-sm-5">
		<input type="text" name="ee" value="<?php echo $res['depart_time']; ?>" class="form-control"/></div>
	</div><br>
<div class="row">
		<div class="col-sm-4">Arrival_time</div>
		<div class="col-sm-5">
		<input type="text" name="ff" value="<?php echo $res['arrival_time']; ?>" class="form-control"/></div>
	</div><br>
<div class="row">
		<div class="col-sm-4">Seats</div>
		<div class="col-sm-5">
		<input type="text" name="gg" value="<?php echo $res['seats']; ?>" class="form-control"/></div>
	</div><br>
	<div class="row">
		<div class="col-sm-4">Price</div>
		<div class="col-sm-5">
		<input type="text" name="hh" value="<?php echo $res['price']; ?>" class="form-control"/></div>
	</div><br>
	
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Bus" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	
