<?php
session_start();
?>
<html>
<head>
    <title>Ejercicio 3 relación 8 PHP</title>

    <style media="screen">
        h1 {
            color: blue;
        }

        p {
            font-weight: bold;
        }
    </style>

</head>
<body>
<h1>Manejo de sesiones</h1>
<p>Paso 3: La variable ya ha sido destruida y su valor se ha perdido</p>
<?php
print("Valor de la variable de sesión: ");
print($_SESSION["nombre"]);
?>
<br/>
<a href="Ejercicio%203.1.php">Volver al paso 1</a>
</body>
</html>
