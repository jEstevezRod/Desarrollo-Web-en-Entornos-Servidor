<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <style>
        form {
            border: 2px dotted black;
            margin-right: 50%;
            padding: 25px;
        }

        h1 {
            color: dodgerblue;
        }

    </style>
</head>
<body>
<div>
    <form method="post">
        <h1>Subida de ficheros</h1>
        <h2> Insertar nueva noticia</h2>
        <table>
            <tr>
                <td>Título : *</td>
                <td><input type="text" name="titulo"/></td>
            </tr>
            <tr>
                <td>Texto : *</td>
                <td><textarea name="texto" rows="8" cols="80"></textarea></td>
            </tr>
            <tr>
                <td>Categoría:</td>
                <td><select>
                        <option value="promociones">Promociones</option>
                        <option value="noticias">Noticias</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Imagen:</td>
                <td><input type="file" name="imagen"/></td>
            </tr>
            <tr>
                <td><input value="Insertar noticia" type="submit" autofocus></td>
            </tr>
        </table>
    </form>
</div>

<div class="resultado">
    <h1>Subida de ficheros. Resultado del formulario</h1>
    <h2>Resultado de la inserccion de nueva noticia</h2>
    <p>No se ha podido realizar la inserccion debido a los siguientes errores:</p>

</div>
<?php

/*1. Realiza un formulario en una página llamada ejercicio1.php.
Al pulsar el botón “Insertar noticia” debe llevarte a la misma página y comprobar que los valores obligatorios
no están vacíos, si alguno de ellos está vacío deberá mostrar en la página los errores producidos y mostrarle
un enlace para volver al formulario:
Si no hay errores debes guardar el fichero de imagen en una carpeta img que previamente debes haber creado
dentro del mismo directorio que contiene la página ejercicio1.php y mostrar después los datos insertados. En
el nombre del fichero debe poner un enlace de manera que al pulsarlo se muestre dicho fichero, así:
*/
$css = @$_POST["resultado"];
echo $css;

function check()
{
    $titulo = @$_POST["titulo"];
    $texto = @$_REQUEST["texto"];
    $categoria = @$_POST["categoria"];
    $imagen = @$_POST["imagen"];

    echo '<ul>';
    if (empty($titulo)) {

        echo '<li>No has rellenado el apartado de titulo, recuerda que es obligatorio! </li>';
    }
    if (empty($texto)) {
        echo '<li>No has rellenado el apartado de texto, recuerda que es obligatorio! </li>';
    }
    echo '</ul>';
}

check();
?>


</body>
</html>
