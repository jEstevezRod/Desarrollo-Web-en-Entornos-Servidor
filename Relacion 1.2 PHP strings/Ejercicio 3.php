<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 3</title>
    <style type="text/css">
        body {
            padding-top: 100;
            width: 1300px;
            margin: 0 auto;
            
        }
        #php {
            padding-top: 150;
            text-align: center;
        }

    </style>

</head>

<body>
    <p>En algunas ocasiones tenemos que comprobar la validez de una cadena de caracteres para ver si contiene solamente aquellos que consideramos como válidos. Por ejemplo, si tuviéramos que validar el nombre de usuario anterior, podríamos permitir números, letras y ocasionalmente caracteres ‘-‘ o ‘_’,pero no otro tipo de caracteres como ‘+’, ‘@’, ’'‘, '&', etc. Además, siendo un nombre de usuario, podemos tener fijados un máximo y mínimo número de caracteres. Realiza una comprobación para el nombre de usuario con dos partes, la primera para ver si la longitud de la cadena está permitida (entre 3 y 20 caracteres) y la segunda para asegurar que los caracteres utilizados están entre los permitidos(letras, números, guión alto, guión bajo).</p>


    <div id='php'><?php
    
    
    function validar($username) {
        
        echo "<strong>Nombre de usuario introducido:<h1> $username </h1></strong><br/>";

        $validos = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z','-','_','0','1','2','3','4','5','6','7','8','9');
        if ((strlen($username) > 3) && (strlen($username) < 20)) {
            $arr1 = str_split($username);
            for ($k = 0; $k < count($arr1); $k++){
                if (in_array($arr1[$k], $validos))
                {
                    continue;
                }
                else 
                    echo "Carácter nº " . ($k +1) . " ==> ( " . ($arr1[$k]) . " ) es inválido, introduce otro username porfavor";
            }    
        }
        else
            echo 'DEMASIADO LARGO';
    }
    
    validar('je?sus-7_elmejor');

    ?>
    </div>
</body>

</html>
