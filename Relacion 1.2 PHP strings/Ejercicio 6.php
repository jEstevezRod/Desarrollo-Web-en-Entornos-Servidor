<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 6</title>
    <style type="text/css">
        body {
            text-align: center;
            padding-top: 100;
            width: 1300px;
            margin: 0 auto;
            font-size: 120%;
            font-family: Calibri Light;
        }
        
        #php {
            padding-top: 150;
            text-align: center;
            font-size: 150%;
            font-family: Calibri;
        }
    </style>

</head>

<body>
    <p>Realiza una página PHP en la que por medio de la función printf muestre un número tanto en
binario como en octal.</p>


    <div id='php'>
        <?php

        $num= 65;

        printf("El numero %s, en binario se representa así: %b <br> Y en octal de la siguiente manera: %o", $num, $num, $num);

        ?>
    </div>
</body>

</html>