<?php

extract($_POST);
$sueldoF=0;
$sueldo=$_POST['sueldo'];

switch ($categoria) {
	case '1':
	echo "Su salario es " . $sueldoF=$sueldo*(15/100)+($sueldo+$sueldoF) ;
		break;

	case '2':
	echo "Su salario es " . $sueldoF=$sueldo*(10/100)+($sueldo+$sueldoF) ;
		break;

	case '3':
	echo "Su salario es " . $sueldoF=$sueldo*(8/100)+($sueldo+$sueldoF) ;
		break;

	case '4':
	echo "Su salario es " . $sueldoF=$sueldo*(7/100)+($sueldo+$sueldoF) ;
		break;

	default:
		 echo "Error";
		break;
}

include('sueldo1.php');
?>