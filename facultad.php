<?php
$c1=$_POST['Calificacion 1'];
$c2=$_POST['Calificacion 2'];
$c3=$_POST['Calificacion 3'];
$carrera=$_POST['Carrera']
$matricula=$_POST['Matricula']

 $promedio = ($c1+$c2+$c3)/3;

 if (isset($promedio) and $promedio>8.8){
 	$x="";
 }
 else (condition) {
 	# code...
 }
 include ('facultad.php');
 return $x;

?>