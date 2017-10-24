<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 3</title>

</head>

<body>
    <p>Programa para imprimir las tablas de multiplicar desde la 1 a la 10 </p>
    <?php
 
    echo "<table>";
    for ($i = 1; $i < 101; $i++) {
        if ($i % 10 == 1) echo "<tr>";
        echo "<td>" . $i . "</td>";
        if ($i % 10 == 0) echo "</tr>";
    }
    echo "</table>";
    // no me sale lo de los colores
    ?>
</body>

</html>
