<?php 
extract($_POST);
if(isset($add))
{

	if($a=="" || $b=="" || $c=="" || $d=="" || $e=="" || $f=="" || $g==""|| $v=="" || $h=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		
mysqli_query($conn,"insert into bus values('','$a','$v','$b','$c','$d','$e','$f','$g','$h')");
		
		
		$err="<font color='green'>Bus Added Successfully</font>";	
	}
}

?>
<h2>Add New Bus</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Journey_date</div>
		<div class="col-sm-5">
                <input type="text" name="a" class="form-control"/></div>	
	        </div><br>
	<div class="row">
		<div class="col-sm-4">Travels</div>
		<div class="col-sm-5">
		<input type="text" name="v" class="form-control"/></div>
                </div><br>
	
	
	
<div class="row">
		<div class="col-sm-4">Source</div>
		<div class="col-sm-5">
		<input type="text" name="b" class="form-control"/></div>
	</div><br>
	
	
	
<div class="row">
		<div class="col-sm-4">Destination</div>
		<div class="col-sm-5">
		<input type="text" name="c" class="form-control"/></div>
	</div><br>
	
	
	
<div class="row">
		<div class="col-sm-4">Bus Type</div>
		<div class="col-sm-5">
		<input type="text" name="d" class="form-control"/></div>
	</div><br>
	
	
	
<div class="row">
		<div class="col-sm-4">Depart_time</div>
		<div class="col-sm-5">
		<input type="text" name="e" class="form-control"/></div>
	</div><br>
	
	
	
<div class="row">
		<div class="col-sm-4">Arrival_time</div>
		<div class="col-sm-5">
		<input type="text" name="f" class="form-control"/></div>
	</div>
	
	
	
<div class="row">
		<div class="col-sm-4">Seats</div>
		<div class="col-sm-5">
		<input type="text" name="g" class="form-control"/></div>
	</div><br>
	<div class="row">
		<div class="col-sm-4">Price</div>
		<div class="col-sm-5">
		<input type="text" name="h" class="form-control"/></div>
	</div><br>
	
	
	
	
	
	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Bus" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	
