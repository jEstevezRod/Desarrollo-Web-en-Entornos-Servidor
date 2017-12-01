<html>
<meta charset="UTF-8">
<head>
    <style>
        form {
            border: 1px dotted dodgerblue;
            margin-right: 40%;
        }

        form div {
            margin: 15px 0px 25px 15px;
        }

        h1 {
            color: dodgerblue;
        }

        .error {
            color: #ff0600;
        }
    </style>
</head>
<body>
<?php

$textoError = "";
$texto = "";

if (isset($_POST['cf_submit'])) {
    if (empty($_POST["texto"])) {
        $textoError = "* El texto a buscar es obligatorio";
    } else {
        $texto = $_POST["texto"];
    }
}


?>

<h1>Formulario simple</h1>
<h2><em>Búsqueda de canciones</em></h2>

<form action="ejercicio1-resultados.php" method="post">
    <div><strong>Texto a buscar</strong>: <input type="text" name="texto"
                                                 value=""<?php echo htmlspecialchars($texto); ?>"">
    </div>
    <span class="error"> <?php echo $textoError ?></span>
    <div><strong>Buscar en: </strong>
        <input type="radio" name="buscar" value="Titulos de cancion" id="buscaroption1">Titulos de canción
        <input type="radio" name="buscar" value="Nombres de album" id="buscaroption2">Nombres de albúm
        <input type="radio" name="buscar" value="Ambos campos" id="buscaroption3">Ambos campos
    </div>
    <div>
        <strong>Genero musical: </strong> <select name="genero[]">
            <option name="Todos">Todos</option>
            <option name="Acustica">Acustica</option>
            <option name="Banda sonora">Banda sonora</option>
            <option name="Blues">Blues</option>
            <option name="Electronica">Electronica</option>
            <option name="Folk">Folk</option>
            <option name="Jazz">Jazz</option>
            <option name="New Age">New Age</option>
            <option name="Pop">Pop</option>
            <option name="Rock">Rock</option>
        </select>
    </div>
    <div><input type="submit" name="cf_submit" value="Buscar"></div>

</form>
</body>
</html>