<html>
<body>
<form action="" method="post">
    ¿Adivinas el número? (Entre 0 y 100):<br>
    <input type="number" name="comprobar"><br>
    <input type="hidden" name="random" value="<?php echo $random; ?>">
    <input type="submit" name="action" value="Comprobar">
</form>
<?php

$random = isset($_POST['random']) ? $_POST['random'] : rand(0, 100);
if (isset($_POST['comprobar'])) {
    if ($_POST['comprobar'] == $random) {
        echo "Acertaste<br/>Hemos generado un nuevo número aleatorio.<br/>";
        $random = rand(0, 100);
    } else {
        echo "Pruebe suerte otra vez";
    }
}
?>

</body>
</html>