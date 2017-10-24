<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1</title>
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
    <p>Crea un array $dias con los días de la semana y muestra todas sus parejas
índices/valores mediante un bucle foreach y for.</p>


    <div id='php'>
        <?php

    echo "Con foreach: <br>";

    $dias = ['lunes', 'maertes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];

    foreach ($dias as $clave => $valor) {
        echo "El $valor corresponde con el $clave de la semana. <br>";
    };

    echo "----------------------------------------------------------------------------- <br>";
    echo "Con for: <br>";

    for ($i=0; $i < sizeof($dias); $i++) { 
        echo "El $dias[$i] corresponde con el $i de la semana. <br>";
    }
    

    ?>
    </div>
</body>

</html>