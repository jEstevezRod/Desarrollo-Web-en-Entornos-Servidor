<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1</title>

</head>

<body>
    <p>Obtener un programa que determine si un año es o no bisiesto</p>
    <?php

    function esañoBisiesto($anio) {
        $anio = ($anio==NULL)? date('Y'):$anio;
      if ( ($anio%4 == 0 && $anio%100 != 0) || $anio%400 == 0 ) {
          echo "Es bisiesto!";
      } else {
          echo "No es bisiesto!";
      }
    };
    
    esañoBisiesto(2001);
?>
        <?php

    function letraDNI($dni) {
       $letras= "TRWAGMYFPDXBNJZSQVHLCKE";
       $valor= ($dni % 23);
       $letra= substr ($letras, $valor, 1);
     return $letra;
}
    echo (letraDNI(96000007));
?>
</body>

</html>
