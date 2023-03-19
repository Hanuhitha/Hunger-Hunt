<?php  
 $connect = mysqli_connect("localhost", "root", "", "hotelbooking");  
 $number = count($_POST["room"]);  
 echo $number;
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["room"][$i] != ''))  
           {  
                $sql = "INSERT INTO textbox(val) VALUES('".mysqli_real_escape_string($connect, $_POST["room"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?>  