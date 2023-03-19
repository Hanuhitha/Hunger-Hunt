<html>
<body>
<?php include('config.php');    
  $sql = $db->query("SELECT * FROM gallery");
    if(isset($sql) && count($sql)) :  
      foreach ($sql as $key => $row) : ?>    
       <img src="uploads/<?php echo $row['image']; ?>" /> 
<?php endforeach;   endif; ?>
</body>
</html>