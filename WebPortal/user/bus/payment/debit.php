

<h2 style="color:#00FFCC">Debit Card</h2>
<script type="text/javascript">
   
      function validates()
      {
      
         if( document.myForm.names.value == "" || !isNaN(document.myForm.names.value))
         {
            alert( "Please provide your name!" );
            document.myForm.names.focus() ;
            return false;
         }
         
  if( document.myForm.cvv.value == "" ||
         isNaN( document.myForm.cvv.value ) ||
         document.myForm.cvv.value.length != 3 )
         {
            alert( "Enter 3 digit cvv number" );
            document.myForm.cvv.focus() ;
            return false;
         }

      
         
  if( document.myForm.no.value == "" ||
         isNaN( document.myForm.no.value ) ||
         document.myForm.no.value.length != 16 )
         {
            alert( "Enter 16 digit card number" );
            document.myForm.no.focus() ;
            return false;
         }
         
      }
</script>
<form action="sucess.php" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return(validates());">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td> Debit Card Number</td>
					<Td><input  type="text"  class="form-control" name="no" required/></td>
				</tr>
			
				
				
				
				<tr>
					<td>Expiry Date</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=2017;$i<=2050;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>

					<br/>
<tr>
					<td> cvv </td>
					<Td><input type="text"  class="form-control" name="cvv" required/></td>
				</tr>
 					
					
					<br/>
					<tr>
					<td>Name On Card </td>
					<Td><input type="text"  class="form-control" name="names" required/></td>
				</tr>
 					
					
					<br/>
<tr>
<td>
<input type="submit" class="btn btn-success" value="pay" name="save"/>

	</td></tr>				
					
			</table>
		</form>

