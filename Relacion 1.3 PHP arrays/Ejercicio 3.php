<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO </title>
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
    <p></p>


    <div id='php'>
        <?php
    $colores = [
        'fuertes' => ['rojo' => 'FF0000', 'verde' => '00FF00', 'azul' => '0000FF'],
        'suaves' => ['rosa' => 'FE9ABC', 'amarillo' => 'FDF189', 'malva' => 'BC8F8F']
    ];
    echo '<table>';
    foreach ($colores as $tipo) {
        echo '<tr>';
        foreach ($tipo as $nombre => $color) {
            echo '<td style="background-color:#' . $color . '">';
            echo $nombre . ':' . $color;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    

    ?>
    </div>
</body>

</html>