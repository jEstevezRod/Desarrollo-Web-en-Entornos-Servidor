<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1</title>

</head>

<body>
    <p>Programa para imprimir las tablas de multiplicar desde la 1 a la 10 </p>
    <?php
 
for($tabla=1; $tabla<=10; $tabla++) {
 echo "<h3>Tabla del $tabla </h3>";
 
 for($i=1; $i<=10; $i++) 
 {
  echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
 }
}
?>
</body>

</html>
