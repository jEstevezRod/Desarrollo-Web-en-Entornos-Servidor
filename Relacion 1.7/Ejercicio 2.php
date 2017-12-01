<html>
<body>
<?php

if (isset($_POST['recordar']) && $_POST['recordar'] == 'si') {
    if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
        setcookie("usuario", $_POST['usuario'], time() + 60 * 60 * 24 * 100, "/");
        setcookie("contraseña", $_POST['contraseña'], time() + 60 * 60 * 24 * 100, "/");
    }
}
?>
<form action="" method="post">
    usuario: <input type="text" name="usuario"><br/>
    contraseña: <input type="contraseñaword" name="contraseña"><br/>
    <input type="checkbox" name="recordar" value="si" checked="checked"> Recordar<br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php
print_r($_COOKIE);
?>
