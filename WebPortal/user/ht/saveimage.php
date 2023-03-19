 
 
<?php
/**********MYSQL Settings****************/
$host="localhost";
$databasename="hotelbooking";
$user="root";
$pass="";
/**********MYSQL Settings****************/


$conn=mysql_connect($host,$user,$pass);

if($conn)
{
$db_selected = mysql_select_db($databasename, $conn);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
}
else
{
    die('Not connected : ' . mysql_error());
}



if(isset($_POST['Upload'])){


/*

 function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/".$imagename;
	

if(move_uploaded_file($temp_name, $target_path)) {

 	$query_upload="INSERT into 'mainimg' ('images_path','submission_date') VALUES 

('".$target_path."','".date("Y-m-d")."')";
	mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());  
	
}else{

   exit("Error While uploading image on the server");
} 

}*/


$imagename=$_FILES["uploadedimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['uploadedimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO mainimg VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);
}
?>
