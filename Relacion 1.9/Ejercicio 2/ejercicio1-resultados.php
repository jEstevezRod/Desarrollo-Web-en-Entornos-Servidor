<hmtl>
    <head>
        <meta charset="UTF-8">
        <style>
            h1 {
                color: dodgerblue;
            }
        </style>
    </head>
    <body>

    <h1>Formulario simple. Resultados del formulario</h1>
    <p>Estos son los datos introducidos:</p>
    <ul>
        <li>Texto de búsqueda: <?php echo $_POST['texto']; ?></li>
        <li>Buscar en album:</li>
        <li>Género:</li>
    </ul>
    </body>
</hmtl>
