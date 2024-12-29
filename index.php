<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fundamentos do PHP</title>
</head>

<body>
	<h1>
		<?php
		echo "Hello World";
		?>
	</h1>

	<p>
		<?php
		echo "Havia um homem que era um gato";
		?>
	</p>

	<div>
		<?php
		$saudacao = "Oi";
		$numero = 10;
		for ($i = 0; $i < $numero; $i++) {
			echo ("<p>{$saudacao} - {$i}</p>");
		}
		?>
	</div>

</body>

</html>