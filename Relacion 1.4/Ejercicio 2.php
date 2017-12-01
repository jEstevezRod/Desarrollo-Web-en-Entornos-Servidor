<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
<?php

$frase = 'Bienvenidos a la aventura de aprender PHP en 30 horas';

function central()
{
    global $frase;
    $longitud = strlen($frase);
    $mitad = round($longitud / 2, PHP_ROUND_HALF_UP) - 5;
    $mitad2 = round($mitad / 2, PHP_ROUND_HALF_UP) + 5;
    return substr($frase, $mitad2, $mitad);
}

echo 'La parte central es: ' . central();
echo '<br>';

function averigua()
{
    global $frase;
    return strpos($frase, 'PHP');
}

echo 'La posicion de PHP es: ' . averigua();
echo '<br>';

function reemplazo()
{
    global $frase;
    return str_replace('aventura', '<b>misión</b>', $frase);
}

echo 'Frase con el reemplazo: ' . reemplazo();
echo '</br>';

?>
</body>
</html>