<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 14/11/2017
 * Time: 10:28
 */


include listado . php;

while ($entry = readdir($direc)) {
    if (!is_dir($entry)) {        //Comprueba si es un directorio
        echo "<br />";
        echo "Ultima modificación de: " . $entry . " - " . date("F d Y H:i:s.", filemtime($entry));
        echo " - Tamaño: " . filesize($entry) . ' bytes.';
    }
}

