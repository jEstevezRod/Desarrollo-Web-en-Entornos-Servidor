<?php
$archi = "Agenda.txt";
$file = @fopen($archi, "r");
$num_lineas = 0;
$peso = filesize($archivo);
while (($linea = fgets($file)) !== false) {
    echo "$linea . <br/>";
    $num_lineas++;
}
echo "Número de lineas = " . $num_lineas;
echo "Tamaño del archivo = " . $peso;
fclose($file);
?>