<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
<?php

$frase = "Una frase con letras no se que escribir mas";

//o La posición de la primera ocurrencia de la letra ‘a’.

function letraA()
{
    global $frase;
    return strpos($frase, 'a');
}

echo 'La letra a aparece en la posicion ' . letraA();
echo '<br>';

//o La posición de la primera ocurrencia de la letra ‘m’.

function letraM()
{
    global $frase;
    return strpos($frase, 'm');
}

echo 'La letra m aparece en la posicion ' . letraM();
echo '<br>';


//o La posición de la primera ocurrencia de la palabra “cantidad”.

function palabraCantidad()
{
    global $frase;
    return strpos($frase, 'cantidad');
}

echo 'La primeria ocurrencia aparece en la posicion ' . palabraCantidad();
echo '<br>';

//o La primera ocurrencia desde el final de la letra ‘e’.

function letraE()
{
    global $frase;
    return strrpos($frase, 'e');
}

echo 'La letra e desde el final aparece en la posicion ' . letraE();
echo '<br>';

//o La frase desde la aparición de la palabra “texto” hasta el final.

function texto()
{
    global $frase;
    return strstr($frase, 'texto');
}

echo 'La frase desde texto hasta el final: ' . texto();
echo '<br>';

//o La cadena desde el carácter 15 hasta el final.

function quince()
{
    global $frase;
    return substr($frase, 15);
}

echo 'La cadena desde el caracter 15 hasta el final: ' . quince();
echo '<br>';

//o La cadena devolviendo 6 caracteres desde el carácter 18.

function seis()
{
    global $frase;
    return substr($frase, 18, 6);
}

echo 'La cadena devolviendo 6 caracteres desde el caracter 18: ' . seis();
echo '<br>';

//o La cadena devolviendo los 9 últimos caracteres.

function nueve()
{
    global $frase;
    return substr($frase, strlen($frase) - 9);
}

echo 'La cadena devolviendo los 9 ultimos caracteres: ' . nueve();
echo '<br>';

//o La cadena empezando en el carácter 4 y terminando en el 7 desde atrás.
function otroArray()
{
    global $frase;
    return substr($frase, 4, strlen($frase) - 7);
}

echo 'Empezando en 4 y acabando en 7 antes del final": ' . otroArray();
echo '</br>';

//o Finalmente debe mostrar una página así:

?>
</body>
</html>