<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RELACION 1.4 </title>
    <style type="text/css">
       
    </style>

</head>

<body>
    <h1>Manejo de cadenas</h1>
    <h2>Ejemplo 1</h2>


    <div id='php'>
        <?php

        //EJERCICIO 1

        function calcula_extension($string)
        {
            if (strstr($string, '.')) {
                $var = strstr($string, '.');
                $varred = trim($var, ".");
            }
            return strtoupper($varred);
        }

        function tipo_fichero($string){
            $var = strstr($string, '.');
            $varred = trim($var, ".");
            switch ($varred) {
                case 'pdf' :
                    return "Documento Adobe PDF";
                case 'txt' :
                    return "Documento de texto";
                case 'html' :
                    return "Documento html";

                case 'htm' :
                    return "Documento html";
                case 'ppt' :
                    return "Documento PowerPoint";
                case 'doc' :
                    return "Documento Microsoft Word";
                case 'gif' :
                    return "imagen GIF";
                case 'jpg' :
                    return "Imagen jpg";
                case 'zip' :
                    return "Archivo comprimido ZIP";
                default :
                    return "Archivo " . strtoupper($varred);
            }
        }
        echo "Ejemplo de formato pdf :  " . calcula_extension("ficha.pdf") . "<br><br>";
        $ejem = "fotocomunion.php";
        echo "El fichero $ejem es de tipo " . tipo_fichero($ejem);

        
        
          /*Ejercicio 2*/
        
          $texto = "uno-dos-tres-cuatro-cinco";
        
          $separadas = explode('-', $texto);
        
          echo '<h1>Manejo de cadenas</h1>';
          echo '<h2>Ejemplo 2</h2>';
          echo '<ul>';
          foreach ($separadas as $valor){
            echo '<li>'.$valor.'</li>';
          };
        
          echo '</ul>';
        

        

        ?>
    </div>
</body>

</html>