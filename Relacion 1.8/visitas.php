<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 14/11/2017
 * Time: 9:08
 */

//Abrimos el fichero en el modo r+
$contador = fopen("visitas.txt", "r+");
//Obtenemos una linea desde el puntero , y seleccionamos que lea 8 bits
$num = fgets($contador, 8);
//Mostramos en pantalla el numero de visitas
echo "Esta es la visita numero: " . $num;
//Aumentamos el contador en 1
$num++;
//Colocamos el fichero al principio del fichero
rewind($contador);
//Escribimos de nuevo el contador sobre el fichero
fputs($contador, $num);
//Cerramos fihcero
fclose($contador);
?>