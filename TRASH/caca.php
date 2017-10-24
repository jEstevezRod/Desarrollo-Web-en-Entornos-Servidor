<?php

date_default_timezone_set('Europe/Madrid');
$nuevaFecha = new DateTime(); 
echo $nuevaFecha->format("Y-m-d H:i:s"); 

?>