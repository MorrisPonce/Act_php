<!DOCTYPE html>
<html>
<head>
	<title> Sueldo de empleados </title>
</head>
<body>

    <section>
    	<form method="post" action=" sueldo.php">
            <select name="categoria">
                <p> Seleccione la categoria del trabajador </p>
                <option value="1"> Categoria 1</option>
                <option value="2"> Categoria 2</option>
                <option value="3"> Categoria 3</option>
                <option value="4"> Categoria 4</option>
            </select> <br>
            <p> Ingrese el sueldo del trabajador</p>
            <input type="text" name="sueldo">
            <input type="submit" name="Salario">


        	<p>
        		<?php

        		echo " El sueldo del trabajador es " .$sueldoF. " pesos "

        		?>
        	</p>
    </section>
</body>
</html>