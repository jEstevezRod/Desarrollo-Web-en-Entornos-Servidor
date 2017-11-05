<html>
<body>
<form action="" method="post">
    Número 1:<br>
    <input type="text" name="num1"><br>
    Número 2:<br>
    <input type="text" name="num2"><br>
    <input type="hidden" name="conteo" value="<?php echo ++$conteo; ?>">
    <input type="submit" name="action" value="Sumar">
    <input type="submit" name="action" value="Restar">
    <input type="submit" name="action" value="Multiplicar">
    <input type="submit" name="action" value="Dividir">
</form>
<?php

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['action'])) hacerAccion($_POST['num1'], $_POST['num2'], $_POST['action']);
$conteo = isset($_POST['conteo']) ? $_POST['conteo'] : 0;
function hacerAccion($num1, $num2, $accion)
{
    $cont = isset($_POST['conteo']) ? $_POST['conteo'] : 1;
    $resultado = 0;
    $simbolo = "";
    switch ($accion) {
        case "Sumar":
            $resultado = $num1 + $num2;
            $simbolo = "+";
            break;
        case "Restar":
            $resultado = $num1 - $num2;
            $simbolo = "-";
            break;
        case "Multiplicar":
            $resultado = $num1 * $num2;
            $simbolo = "*";
            break;
        case "Dividir":
            $resultado = $num1 / $num2;
            $simbolo = "/";
            break;
    };
    echo "{$num1}{$simbolo}{$num2}={$resultado}";
    echo "<br/>Total de operaciones: " . ($cont) . "<br/>";
}
?>
</body>
</html>