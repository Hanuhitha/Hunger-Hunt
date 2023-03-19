<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="adelete_bus.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from bus ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No buses available!!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Buses</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="aindex.php?page=aadd_bus">Add New Bus</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Journey_Date</th>
		<th>Travels</th>
		<th>Source</th>
                <th>Destination</th>
		<th>BusType</th>
		<th>Depart_Time</th>
                 <th>Arrival_Time</th>
		<th>Seats</th>

		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['journey_date']."</td>";
echo "<td>".$row['travels']."</td>";
echo "<td>".$row['source']."</td>";
echo "<td>".$row['destination']."</td>";
echo "<td>".$row['type']."</td>";
echo "<td>".$row['depart_time']."</td>";
echo "<td>".$row['arrival_time']."</td>";
echo "<td>".$row['seats']."</td>";


?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['bus_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='aindex.php?page=aupdate_bus&bus_id=".$row['bus_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>
