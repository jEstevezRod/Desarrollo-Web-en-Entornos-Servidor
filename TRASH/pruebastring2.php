<?php

$email= "jesusestevezrodriguez@gmail.com"

$usuario= stristr("jesusestevezrodriguez@gmail.com", "@");

$dominio= stristr($usuario, ".");

echo $usuario . "<br/>";

echo $dominio;



?>