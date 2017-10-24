<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php
		$c1='tengo camiones';
		$c2='me voy de vacaciozes';
		$lista=['camiones', 'vacaciones'];

		function riman($x) {
			for ($i=1; $i < $x.lenght ; $i++) { 
				if (!strcasecmp(substr($x[0], -3), substr($x[$i], -3))){
					echo "Las cadenas $c1 y $c2 riman a la perfecion";
				}
				elseif (!strcasecmp(substr($x[0], -2), substr($x[$i], -2))) {
					echo "Las cadenas $c1 y $c2 riman regular";
				}
				else 
					echo "Las cadenas $c1 y $c2 no riman";
			}
		}

riman(lista);

?>
</body>

</html>
