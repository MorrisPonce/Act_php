<!DOCTYPE html>
<html>
<head>
	<title> area de terrenos </title>
</head>
<body>

    <section>
    	<form method="post" action=" terrenos.php">
    		<label> Capture la base y el lado derecho del terreno </label>
            <br>
            <p> Ingrese la base del terreno </p>
    		<input type="text" name="base"/>
            <br>
            <p> Ingrese el lado derecho del terreno </p>
    		<input type="text" name="l2"/>
            <br>
            <input type="submit" value="area del terreno">
        	</form>
        	<p>
        		<?php

        		echo "El area de la figura es ". $area . "metros cuadrados";

        		?>
        	</p>
    </section>
</body>
</html>