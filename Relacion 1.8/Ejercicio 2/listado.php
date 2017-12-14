<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 14/11/2017
 * Time: 9:08
 */

$direc = opendir('.') or die("Error");
while ($entry = readdir($direc)) {
    if (is_dir($entry)) {
        echo "[" . $entry . "]<br/>";
    } else {
        echo "<br />";
        echo "La última modificación fue : " . $entry . " - " . date("F d Y H:i:s.", filemtime($entry));
        echo " - Tamaño del archivo: " . filesize($entry) . ' bytes.';
    }
}


