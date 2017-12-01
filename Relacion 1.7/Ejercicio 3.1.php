<?php
session_name("Prueba");
session_start();
if (!isset($_SESSION["nombre"])) {
    $_SESSION["nombre"] = "Maria";
}
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
<p>Paso 1: Se crea la variable de sesión y se almacena</p>
<?php
print("Valor de la variable de sesión: ");
print($_SESSION["nombre"]);
?>
<br/>
<a href="Ejercicio%203.2.php">Paso 2</a>
</body>
</html>
