<?php
$direccion = 'C:\xampp\htdocs\Desarrollo-Web-en-Entornos-Servidor';
if ($dir = opendir('C:\xampp\htdocs\Desarrollo-Web-en-Entornos-Servidor')) {
    echo "Directorio a leer: $direccion.<br/>";
    echo "Entradas:.<br/>";
    while (false !== ($entry = readdir($dir))) {
        echo "$entry.<br/>";
    }
    closedir($dir);
}
?>