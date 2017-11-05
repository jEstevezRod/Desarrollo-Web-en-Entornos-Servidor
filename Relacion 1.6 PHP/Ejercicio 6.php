<html>
<body>
<form action="" method="post">
    Día:<br>
    <input type="text" name="dia"><br>
    Mes:<br>
    <input type="text" name="mes"><br>
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST['mes']) && isset($_POST['dia'])) calcularDiferencia($_POST['dia'], $_POST['mes']);

function calcularDiferencia($dia, $mes)
{
    $anyo = date('Y');
    if ((date('m') > $mes) || (date('d') > $dia && date('m') == $mes)) $anyo = date('Y', strtotime('+1 year'));
    $ahora = new DateTime();
    $cumple = new DateTime($anyo . '-' . $mes . '-' . $dia);
    $diferencia = $cumple->diff($ahora);
    $cumple = $diferencia->format('%a días, %H horas, %i minutos y %s segundos');
    echo "Te quedan $cumple para tu cumpleaños";
}
?>
</body>
</html>