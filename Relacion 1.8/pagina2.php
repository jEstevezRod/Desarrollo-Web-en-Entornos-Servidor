<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 14/11/2017
 * Time: 10:52
 */

$mensaje = "Los datos se han guardado correctamente";
$nombre = $_POST["nombre"];
$comentario = $_REQUEST["comentario"];
$separador = "----------------------------------------------------------";

$listaweb = [$mensaje, $separador, $nombre, $comentario, $separador];

for ($index = 0; $index < count($listaweb); $index++) {
    echo $listaweb[$index] . "<br/>";
}

$listatxt = [$nombre, $comentario, $separador];

for ($index = 0; $index < count($listatxt); $index++) {
    $file = fopen("datos.txt", "a");
    fwrite($file, $listatxt[$index] . "\r\n");
    fclose($file);
}
