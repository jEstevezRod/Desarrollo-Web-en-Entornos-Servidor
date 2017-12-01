<html>
<head>

</head>
<body>
<?php
/*Ejercicio 2*/

$texto = "uno-dos-tres-cuatro-cinco";
echo 'texto inicial: ' . $texto;

$separadas = explode('-', $texto);

echo '<h1>Manejo de cadenas</h1>';
echo '<h2>Ejemplo 2</h2>';
echo '<ul>';
foreach ($separadas as $valor) {
    echo '<li>' . $valor . '</li>';
};

echo '</ul>';

?>
</body>
</html>