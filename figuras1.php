<!DOCTYPE html>
<html>
<head>
	<title> area de la figura </title>
</head>
<body>

    <section>
    	<form method="post" action=" figuras.php">
    		<label> Capture el radio y la altura de un triangulo </label>
            <br>
            <p> Ingrese el radio del circulo </p>
    		<input type="text" name="radio"/>
            <br>
            <p> Ingrese la altura del triangulo </p>
    		<input type="text" name="altura"/>
            <br>
            <input type="submit" value="area de la figura">
        	</form>
        	<p>

                <?php

               echo "El area de la figura es ". $area . "metros cuadrados";

                ?>
        	</p>
    </section>
</body>
</html>