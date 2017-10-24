<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 2</title>
    <style type="text/css">
    	    body {
            	padding-top: 100;
            	width: 1300px;
            	margin: 0 auto;
            }
            #php {
            	padding-top: 115;
            	text-align: center;
            }
    </style>
</head>
<body>
    <p>Realiza una página PHP que permita chequear si en una caja de texto se introduce una dirección
	de correo válida. Una dirección de correo válida debe tener presentes los caracteres ‘@’ y ‘.’ Si
	la dirección es válida escribe por un lado el nombre de usuario y por otro el dominio de dicha
	dirección.</p>


    <div id='php'><?php

    
        function chequea($correo) {
        	echo "<strong>La dirección de correo es:<h2> $correo </h2></strong><br/>";
			if (strstr($correo,"@")) {
				$var = strrpos($correo,"@");
				if (strstr($var,".")) {
					
					print('<strong>Nombre de usuario:<h2> ' . substr($correo,0,$var) . ('</h2></strong>'));
					echo '<br>';
					print('<strong>Dominio:<h2> ' . strstr($correo,'@') . ('</h2></strong>'));
				}
			} else 
				echo "No tiene arroba";			
		}
		chequea('jesuseselmejor@gmail.es');
	?></div>
</body>

</html>
