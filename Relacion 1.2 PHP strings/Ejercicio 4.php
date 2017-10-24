<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 4</title>
    <style type="text/css">
        body {
            padding-top: 100;
            width: 1300px;
            margin: 0 auto;
            font-size: 150%;
            
        }
      
    </style>

</head>

<body>
    <p>Realiza una página PHP en la que se introduzca una frase en una variable. Muestra por pantalla
las dos primeras palabras de esa frase.</p>


    <?php
    
    $frase = "No me toques las narices, señor Rajoy";

    echo "Esta es la frase completa: " . $frase . "<br/>";

    $primera = strstr($frase, ' ', true);

    echo "Esta es la puta primera palabra: " . $primera;

    $resto = strstr($frase, ' ');

    echo "<br/> El resto de palabras son estas: " . $resto;

    $segunda = strstr($resto, ' ', true);

    echo "<br/> La segunda palabra es: " . $segunda;

    ?>
    </div>
</body>

</html>
