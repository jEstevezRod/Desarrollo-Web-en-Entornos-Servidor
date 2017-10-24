<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 5</title>
    <style type="text/css">
        body {
            padding-top: 100;
            width: 1300px;
            margin: 0 auto;
            font-size:120%;
            font-family:Calibri Light;
            
        }
        #php {
            padding-top: 150;
            text-align: center;
            font-size:150%;
            font-family:Calibri;

        }

    </style>

</head>

<body>
    <p>Realizar una página PHP en la que introduzca una frase en una variable y a continuación
muestre el número de letras ‘a’ en esa cadena de la siguiente forma:
</p>


    <div id='php'><?php
                    $frase = "Vayase señor Rajoy, vayase!";

                    echo "Frase: " . $frase . " ---> número de apariciones de 'a': " . substr_count($frase, 'a');

                    ?>
    </div>
</body>

</html>
