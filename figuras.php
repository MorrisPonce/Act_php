<?php
 extract($_POST);
$subarea1 = (3.1416* ($radio*$radio))/2;
$subarea2 = ($altura * ($radio*2))/2;
$area = $subarea1 + $subarea2;




include('figuras1.php');
?>