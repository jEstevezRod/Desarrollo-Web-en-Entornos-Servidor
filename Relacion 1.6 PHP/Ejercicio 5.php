<?php
$arraymult = array
(
    'Miedo' => array("It", "Veronica", "Insidious"),
    'Amor' => array("La vida es bella", "3 metros sobre el cielo", "Lo que el viento se llevo"),
    'Accion' => array("to fast to furious", "Thor: Ragnarok", "Jungla de Cristal"),
);
foreach ($arraymult as $genero => $peliculas) {
    echo $genero;
    echo '<ul>';
    foreach ($peliculas as $pelicula) {
        echo '<li>' . $pelicula . '</li>';
    }
    echo '</ul>';
}
?>