<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>Ejercicio1</title>

    <style media="screen">
        body{
            background-color: burlywood;
        }

        .bloque {
            margin: auto;
            width: 500px;
            background-color: rgba(85, 79, 84, 0.8);
            margin-bottom: 100px;
            border: 2px solid black;
        }

        p {
            padding-left: 25px;
        }

        #boton {
            margin-left: 200px;
        }

        #titulos {
            background-color: rgb(93, 148, 255);
        }

        #primero {
            float: left;
        }

        #segundo {
            float: left;

        }

        #tercero {
            float: left;

        }

        #cuarto {
            float: left;

        }

        .partecicas {
            background-color: rgb(31, 194, 227);
            padding: 400px
        }

    </style>

</head>
<body>


<div class="bloque">
    <form method="post">
    <br>
    <p id="uno">Introduzca el nombre del circuito: <input id="primero" type="text" name="nombre" value=""></p>
    <p id="dos">Introduzca el destino: <input id="segundo" type="text" name="destino" value=""></p>
    <p id="tres">Introduzca la duración: <input id="tercero" type="text" name="duracion" value=""></p>
    <p id="cuatro">Introduzca los días de salida: <input id="cuarto" type="text" name="dias" value=""></p>

    <br>
    <input id="boton" type="submit" value="Enviar">
    <br>
    <br>


    </form>
</div>

<?php

echo "<table style='border: 3px solid midnightblue; margin: auto'>";
echo '<tr id="titulos" >
         <td style="padding: 20px">Nombre</td>
         <td style="padding: 20px">Destino</td>
         <td style="padding: 20px">Duración</td>
         <td style="padding: 20px">Salida</td>
       </tr>';


$nombre = $_POST['nombre'];
$destino = $_POST['destino'];
$duracion = @$_POST['duracion'];
$dias = $_POST['dias'];

class Tabla
{
    var $nombre;
    var $destino;
    var $duracion;
    var $dias;

    function Tabla($nombre=none, $destino=none, $duracion=none, $dias=none)
    {
        $this->nombre = $nombre;
        $this->destino = $destino;
        $this->duracion = $duracion;
        $this->dias = $dias;
    }

    function write()
    {
        $escribir = $this->nombre . ' ' . $this->destino . ' ' . $this->duracion . ' ' . $this->dias . ' ';
        $archivo = fopen("viajes.txt", 'a');
        if (($this->nombre != '') && ($this->destino != '') && ($this->duracion != '') && ($this->dias != '')) {
            fputs($archivo, $escribir . "\r\n");
        }
        fclose($archivo);
    }

    function show()
    {
        $archivo = fopen("viajes.txt", 'r');
        while ($linea = fgets($archivo)) {
            $partes = explode(" ", $linea);
            echo '<tr class="partecicas">
                           <td>' . $partes[0] . '</td>
                           <td>' . $partes[1] . '</td>
                           <td>' . $partes[2] . '</td>
                           <td>' . $partes[3] . '</td>
                         </tr>';
        }
        echo '</table>';
    }
}


$bar = new Tabla($nombre, $destino, $duracion, $dias);
$bar->write();
$bar->show();


?>

</body>

</html>
