<html>  
      <head>  
           <title>Book hotel</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
           
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

      </head>  
 
      <?php
        if(!isset($_POST['submit'])) 
{ 
$con = mysql_connect("localhost","root","");
if(!$con)
{
die("can not connect:".mysql_error());

}
mysql_select_db("hotelbooking",$con);
$hname=$_POST['hidden'];
$check_in=$_POST['check-in'];
$check_out=$_POST['check-out'];
$type=$_POST['htype'];
$room=count($_POST['room']);

$date1=date_create("$check_in");
$date2=date_create("$check_out");
$diff=date_diff($date1,$date2);
$days=$diff->format("%a days");

if($type== "standard")
{
  $sql= "SELECT standardprice,email FROM hotel where hotel_name='$hname'";
  $mydata = mysql_query($sql,$con);
while($record = mysql_fetch_array($mydata))
{
  $a= $record['standardprice'];
  $email=$record['email'];
  
 
  }
}
else if($type== "deluxe")
{
  $sql= "SELECT deluxeprice,email FROM hotel where hotel_name='$hname'";
   $mydata = mysql_query($sql,$con);
  while($record = mysql_fetch_array($mydata))
{
  $a= $record['deluxeprice'];
  $email=$record['email'];
  
 
  }
}
else if($type== "quad")
{
  $sql= "SELECT quadprice,email FROM hotel where hotel_name='$hname'";

  $mydata = mysql_query($sql,$con);
  while($record = mysql_fetch_array($mydata))
{
  $a= $record['quadprice'];
  $email=$record['email'];
  
 
  }
}
else if($type== "suite")
{
  $sql= "SELECT suiteprice,email FROM hotel where hotel_name='$hname'";
   $mydata = mysql_query($sql,$con);
  while($record = mysql_fetch_array($mydata))
{
  $a= $record['suiteprice'];
  $email=$record['email'];

 
  }
} 
else
{
  echo "select room type";
}

$p=$a * $room;
$price=$p * $days;

}

//<!--$sql = "SELECT * FROM hotel where hotel_name='$hid'";
?>
  

           <div class="container">  
                 
               
                <div class="form-group">  
                   <form method="post" action="last_page.php" name="add_name" id="add_name">
                     <br>
                     <br>
                     
                          <div class="table-responsive"> 
                          <div class="your-top"> 
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><b>Hotel Name</b></td>
                                         <td><p><?php echo $hname ?></td>  
                                         
                                    </tr> 
                                      <tr>  
                                         <td><b>Check in</b></td>
                                        <td><p><?php echo $check_in ?></td>  
                                         
                                    </tr>
                                      <tr>  
                                         <td><b>Check Out</b></td>
                                        <td><p><?php echo $check_out ?></td>  
                                        <tr>  
                                         <td><b>Total Days</b></td>
                                        <td><p><?php echo $days ?></td>  
                                    </tr>
                                     <tr>  
                                         <td><b>Room type</b></td>
                                        <td><p><?php echo $type ?></td>  
                                    </tr>
                                    <tr>  
                                         <td><b>Rooms</b></td>
                                        <td><p><?php echo $room ?></td>  
                                    </tr>
                                    <tr>  
                                         <td><b>Price</b></td>
                                        <td><p><?php echo $price ?></td>  
                                    </tr>
                                    </tr>
                                  </table>
                                </div>
                              </div>
  
               <!-- <h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2> --> 
                <div class="form-group">  
                   <form method="post" action="last_page.php" name="add_name" id="add_name">
                     <br>
                     <br>
                     <div class="your-top"> 
                     
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>    
                                         <td>Name</td>

                                         <td><input type="text" name="name" placeholder="Enter your name" class="form-control name_list" /></td>  
                                         
                                    </tr> 
                                      <tr>  
                                         <td>Email Address</td>
                                         <td><input type="text" name="email" placeholder="Enter your email id" class="form-control name_list" /></td>  
                                         
                                    </tr>
                                      <tr>  
                                         <td>Contact Number</td>
                                         <td><input type="text" name="email" placeholder="Enter your mobile number" class="form-control name_list" /></td>  
                                         
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <br>
                              <div class="col-md-8 grid-contact-in">
                                <input type="hidden" name="check-in" value="<?php echo $check_in ;?>" />
                                   <input type="hidden" name="check-out" value="<?php echo $check_out ;?>" />
                                         <input type="hidden" name="room" value="<?php echo $room ;?>" />
                                                     <input type="hidden" name="type" value="<?php echo $type ;?>" />
                                                    <input type="hidden" name="price" value="<?php echo $price ;?>" />

                          <input type="hidden" name="email" value="<?php echo $email ;?>" />
                <input type="submit" value="Continue to payment" name="submit" class="btn btn-info btn-lg">
          </div>
              </form>
                </div>
                              </form>
                             <!--<?php
                              //if(isset($_POST['submit'])) 
//{ 
                                //echo "<script>alert('Press OK for image upload');</script>";
  //echo "<script>
//window.location = 'https://accounts.paytm.com/oauth2/authorize?response_type=code&scope=paytm&theme=pg&redirect_uri=https://secure.paytm.in/oltp-web/oauthResponse&ADDRESS1=&ADDRESS2=&state=1476102247-11:Paywit92364186393709:6079329035:WAP:461BED9173C811065C1B708633A25E6B.Paywit923641863937091476102247-11.webjvm3:MANUAL:8735601:webjvm3&client_id=paytm-pg-client-sso&device=mobile#/login';
//</script>";
//}
?>