<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Ejercicio 1</title>
</head>

<body>

<form method="post"/>

<p>Numero: <input type="text" name="adivina"/>
<p><input type="hidden" name="num"/ value=$num>
<p><input type="hidden" name="intentos"/>

<p><input type="submit" value="Comprobar el formulario">
    <input type="reset" value="borrar todo">
</p>

</form>
</br>

<?php
/*Desarrollaremos un sencillo contador personal de accesos a una página empleando la técnica de envío
y recuperación de cookies. De esta forma, el valor del contador se almacenará en el cliente, no siendo
necesario el almacenamiento de ningún tipo de información en el servidor. El funcionamiento es trivial:
cada vez que se accede a la página, el script recupera el valor de la cookie y la reenvía con el contador
incrementado. De esta forma, cuando el cliente accede al script, éste no tiene más que acceder al valor de
la cookie para determinar cuántas veces ha visitado dicho cliente la página en cuestión.*/

function setRandom()
{
    $res = rand(0, 100);
    setcookie("random", $res, time() + 60 * 60 * 24 * 100, "/");
    return $res;
}

$random = isset($_COOKIE['random']) ? $_COOKIE['random'] : setRandom();
echo $random . '</br>';

if (!empty($_POST['adivina'])) {
    $num = $_POST['adivina'];
    if ($random > $num) print('El numero es mayor.' . $num);
    elseif ($random < $num) print('El numero es menor.' . $num);
    elseif ($random == $num) print('Enhorabuena, ese es el numero correcto.');
}

?>

</body>

</html>
