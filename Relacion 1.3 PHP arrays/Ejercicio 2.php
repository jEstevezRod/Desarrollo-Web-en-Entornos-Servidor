<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 2</title>
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
    <p>Crea un array con una lista de 5 alumnos de la clase. Muestra primero la lista de
los 3 primeros alumnos del array y luego los dos últimos de la lista usando las
funciones array_slice y array_splice.</p>


    <div id='php'>
        <?php
    
    $lista = array('paco', 'pepe', 'manuel', 'antoñico', 'barbara');

    $uno = (array_splice($lista, 0, 3));

    foreach ($uno as $nombre){
        echo $nombre . " , ";
    }

    $dos = array_slice($lista, 0, -2);

    foreach ($dos as $nom){
        echo $nom;
    }

    ?>
    </div>
</body>

</html>