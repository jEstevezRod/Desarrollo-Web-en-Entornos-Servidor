<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libro </title>
    <style>
        form {

            background-color: lightblue;
            margin: 400px;
            margin-top: 50px !important;
            
        }
    
    </style>
</head>
<body>

<form method="post">

    <fieldset>
        <label>
            <b>Nombre:</b>
            <input type="text" name="nombre">
        </label>
    </fieldset>


    <fieldset>
        <label>
            <b>Mensaje: </b>
            <input type="text" name="mensaje">
        </label>
    </fieldset>


    <fieldset>
        <label>
            <b>Animos: </b>
            <input type="text" name="animos">
        </label>
    </fieldset>


    <fieldset>
        <button type="submit" name="enviar">Enviar</button>
    </fieldset>

</form>
<?php
$nombre = "";
if (!empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}
$mensaje = "";
if (!empty($_POST['mensaje'])) {
    $mensaje = $_POST['mensaje'];
}
$animos = "";
if (!empty($_POST['animos'])) {
    $animos = $_POST['animos'];
}
$archivo = "Libro.txt";
$file = @fopen($archivo, "a");
fwrite($file, $nombre . '-' . $mensaje . '-' . $animos);
fclose($file);
?>

</body>
</html>