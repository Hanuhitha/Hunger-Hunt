<?php

$host = 'localhost';  
$user = 'root';   
$pass = ''; 

mysql_connect($host, $user, $pass);

mysql_select_db('hotelbooking') or die (mysql_error()); 
echo '<pre>';
$img = $_FILES['img'];
$email=$_POST['email'];

if(!empty($img))
{
    $folder="Photo/";
    $img_desc = reArrayFiles($img);
   
    
    foreach($img_desc as $val)
    {
        $a=$val['name'];
       
        $newname = date('YmdHis',time()).mt_rand().'.jpg';
        move_uploaded_file($val['tmp_name'],'./Photo/'.$val['name']);
        $insert_path="INSERT INTO slideshow_image VALUES(NULL,'$a','$folder','$email')";  //inserting path to database

$var=mysql_query($insert_path) or die (mysql_error());


    }
}
echo "<script>alert('You are Registered Successfully THANKYOU');</script>";
    echo "<script>
window.location = '../index.php';
</script>";

function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}