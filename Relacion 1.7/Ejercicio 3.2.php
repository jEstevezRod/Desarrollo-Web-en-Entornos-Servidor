<?php
session_name("Prueba");
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
<p>Paso 2: Se accede a la variable de sesion y se destruye</p>
<?php
print("Valor de la variable de sesión: ");
print($_SESSION["nombre"]);
session_destroy();
?>
<br/>
<a href="Ejercicio%203.3.php">Paso 3</a>
</body>
</html>
