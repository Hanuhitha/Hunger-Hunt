<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
//THIS IS INDEX.PHP PAGE
//connect to database.db name is images

$servername="localhost";
$username="root";
$pwd="";
$db="hotelbooking";
 $link = mysql_connect($servername,$username,$pwd) or die("not connected"); 
 $select=mysql_select_db($db,$link);
	   // OR DIE ("Unable to select db".mysql_error());
//to retrive send the page to another page


//to upload
if(isset($_POST['submit']))
{
if(isset($_FILES['image'])) {
        $name=$_POST['image_name'];
      
        $fp=addslashes(file_get_contents($_FILES['image']['tmp_name'])); //will store the image to fp
        }
                // our sql query
                $sql = "INSERT INTO mainimg VALUES('null', '{$name}','{$fp}');";
                            mysql_query($sql) or die("Error in Query insert: " . mysql_error());
} 
?>

</body>
</html>