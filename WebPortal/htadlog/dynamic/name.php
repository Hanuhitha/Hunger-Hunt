<?php  
 $connect = mysqli_connect("localhost", "root", "", "hotelbooking");  
 $number = $_POST["name"]; 
 echo $number;
  $number1 = count($_POST["name"]);   
 echo $number1;
 if($number1 > 0)  
 {  
      for($i=0; $i<$number1; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO textbox(val) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
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