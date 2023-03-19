<?php 
session_start();
$g=$_SESSION['gg'];
?>

<html>
<head>

<title>Print Details</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">

<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}


</style>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
</head>
<body>
<body background="images/b.jpg">
<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
			
				<div class="logo">
 <a class="navbar-brand" href="#">Hello <?php echo $g;?></a>
					<h1><a  href="../index.php"><span>BUS RESERVATION SYSTEM &nbsp</span></a></h1>


				</div>
<a class="navbar-brand" href="d.php">Logout</a>

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
				</div>



				
			</div>
		</div>
	</div>
	




<center>

<h3><b>Print and present this details upon boarding the bus</b></h3><br><br>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<strong>Ticket Reservation Details</strong><br><br>
<div>
<?php
$conn=mysqli_connect("localhost","root","","reservation");
extract($_POST);



$q1=mysqli_query($conn,"SELECT * FROM `tseats`  ");
$rr=mysqli_num_rows($q1);
if(!$rr)
{
echo "";
}
else
{
?>

<h2 >Travel Details</h2>

<table>
	<tr>
		<th>Sr.No</th>
		<td>ID</td>
	<td>NO</td>
	<td>NAME</td>
	<td>AGE</td>
	<td>GENDER</td>
		
	</tr>
		<?php 


$i=1;

while($row=mysqli_fetch_assoc($q1))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo"<td>".$row["id"]."</td>";
echo"<td>".$row["seat_no"]."</td>";
echo"<td>".$row["name"]."</td>";
echo"<td>".$row["age"]."</td>";
echo"<td>".$row["gender"]."</td>";

	




echo "</Tr>";
$i++;
}
?>
</table>
</div>

<?php }
?>

<div>


<?php

$q1=mysqli_query($conn,"SELECT * FROM `tplace`  ");
$rr=mysqli_num_rows($q1);
if(!$rr)
{
echo "<h2 style='color:red'>Journey Towards</h2>";
}
else
{
?>



<table>
	<tr>
		<th>Sr.No</th>
		<td>Travels</td>
	<td>SOURCE</td>
	<td>DESTINATION</td>
	<td>DEPART_TIME</td>
	
		
	</tr>
		<?php 


$i=1;

while($row=mysqli_fetch_assoc($q1))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo"<td>".$row["travels"]."</td>";
echo"<td>".$row["source"]."</td>";
echo"<td>".$row["destination"]."</td>";
echo"<td>".$row["depart_time"]."</td>";


	


?>

<?php 

echo "</Tr>";
$i++;
}
?>


		
</table>
<?php }

$sq="truncate tseats";
$qu=mysqli_query($conn,$sq);


$sq1="truncate tplace";
$qu=mysqli_query($conn,$sq1);










?>
</div>
</center>
</body>
</html>



