<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
//SEARCH.PHP PAGE
    //connect to database.db name = images
         mysql_connect("localhost", "root", "") OR DIE (mysql_error());
        mysql_select_db ("hotelbooking") OR DIE ("Unable to select db".mysql_error());
//display all the image present in the database

        $msg="";
        $sql="select * from mainimg";
        if(mysql_query($sql))
        {
            $res=mysql_query($sql);
            while($row=mysql_fetch_array($res))
            {
                    $id=$row['images_id'];
                    $name=$row['images_path'];
                    $image=$row['name'];

                  $msg.= '<a href="search.php?id='.$id.'"><img src="data:image/jpeg;base64,'.base64_encode($image). ' " />   </a>';

            }
        }
        else
            $msg.="Query failed";
?>
<div>
<?php
echo $msg;
?>
</body>
</html>