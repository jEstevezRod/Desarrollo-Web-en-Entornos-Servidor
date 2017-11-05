<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
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
            <b>Nombre : </b>
            <input type="text" name="nombre">
        </label>
    </fieldset>


    <fieldset>
        <label>
            <b>Apellido : </b>
            <input type="text" name="apellido">
        </label>
    </fieldset>


    <fieldset>
        <label>
            <b>Teléfono : </b>
            <input type="text" name="telefono">
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
$apellidos = "";
if (!empty($_POST['apellido'])) {
    $apellidos = $_POST['apellido'];
}
$telefono = "";
if (!empty($_POST['telefono'])) {
    $telefono = $_POST['telefono'];
}
$archivo = "Agenda.txt";
$file = @fopen($archivo, "a");
fwrite($file, 'Nombre: ' . $nombre . ' Apellido: ' . $apellidos . ' Telefono: ' . $telefono);
fclose($file);
?>

</body>
</html>
