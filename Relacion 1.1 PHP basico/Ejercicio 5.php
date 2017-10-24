<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 5</title>

</head>

<body>
    <p>Muestre una tabla de 4 por 4 que refleje las primeras 4 potencias de los números del uno 1 al 4 (hacer una función que las calcule invocando la función pow).</p>
    <?php
    function potencias()
    {
        echo ("<table>");
        for ($i = 1; $i <= 4; $i++) {
            echo ("<tr>");
            for ($j = 0; $j <= 3; $j++) {
                echo "<td>" . pow($i, $j) . "</td>";
            } 
            echo ("</tr>");
        }
        echo ("</table>");
    }
    potencias();
    ?>
</body>

</html>
