<!DOCTYPE html>
<html>
<body>

<?php
$date1=date_create("2016-10-10");
$date2=date_create("2016-10-14");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
?>

</body>
</html>