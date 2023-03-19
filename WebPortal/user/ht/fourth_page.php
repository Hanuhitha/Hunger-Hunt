 <html>  
      <head>  
           <title>Book hotel</title>  
           <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->  
            <!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>
     
 

  

      </head>  
      <body>  
      <?php
        
//$con = mysql_connect("localhost","root","");
      $db=new mysqli('localhost','root','','hotelbooking');

$hid=$_POST['hidden'];

$sql = "SELECT * FROM hotel where hotel_name='$hid'";
//$mydata = mysql_query($sql,$con);
//while($record = mysql_fetch_array($mydata))
//{
$all_row1=$db->query($sql);
if($all_row1->num_rows>0)
 {
    while($record=$all_row1->fetch_assoc())
 {
  $a= $record['hotel_name'];
 
  }}
  ?>
  

           <div class="container">  
                 
                <h1 align="center"> <?php echo $hid ?> </h1>
  
               <!-- <h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2> --> 
                <div class="form-group">  
                  <!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="add_name" id="add_name">-->
                  <form method="post" action="fifth_page.php" name="add_name" id="add_name" data-toggle="validator" role="form">
                     <br>
                     <br>
                     
                          


                                <div class="table-responsive">  
                                        <div class="your-top"> 
                               <table class="table table-bordered" id="dynamic_field">  
                                   
                                    <tr>
                                      <td>Check in</td>
                                         

                                      <td><input type="date" name="check-in" class="form-control" value="<?php echo date("Y-m-d"); ?>" class="form-control name_list" ></td>
                                    
                                    </tr>
                                     <tr>
                                      <td>Check out</td>
                                 
                                      
          
    
                                      <td><input type="date" name="check-out" class="form-control" value="<?php echo date("Y-m-d"); ?>" ></td>
                                   
                                    </tr>
                                    <tr>
                                      <td>Room type</td>
                                      <td><select name="htype" class="form-control name_list" >
                                       <option value="s">Select room type</option>
                    <option value="standard" name="standard">Standard</option>
                    <option value="deluxe" name="deluxe">Deluxe</option>
                                        <option value="quad" name="quad">Quad</option>
                                        <option value="suite" name="suite">Suite</option>
                  <</select> </td>

                                    </tr>
                                    <table>
                                    </div>
                                        </div>
                                   <br>
                                    <br><br>

                                    <div class="table-responsive"> 
                                     <div class="your-top">  
                               <table class="table table-bordered" id="dynamic_field1">  
                                    <tr>  
                                         <td>Room 1</td>
                                         <td><input type="text" name="room[]" pattern="^[1-6]{1}$" placeholder="Enter no of persons(max 6)" class="form-control name_list"  data-match-error="Whoops, these don't match" required></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add Room</button></td>  
                                      <div class="help-block with-errors"></div>
                                    </tr>  
                               </table>  
                                <div class="help-block">Maximum of 6 persons</div>
                               <div class="col-md-5 grid-contact-in" float="left">
                               <input type="hidden" name="hidden" value="<?php echo $hid ;?>" />
                               <br>
                               <input type="submit" name="submit1" id="submit1" class="btn btn-info btn-lg" value="Continue" />
                               <br>
                               </div> 
                                </div>
                                <br>
                                     </div>
                          

                     </form>  
          
      </body>  
 </html>  
 
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field1').append('<tr id="row'+i+'"><td>Room '+i+'</td><td><input type="number" name="room[]" placeholder="Enter no of persons" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
               
           });  
      });  
 });  
     
 </script>
 