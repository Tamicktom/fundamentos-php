<?php
include "./hero.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Fundamentos do PHP</title>
</head>

<body class="bg-gray-100">
	<?php include "./header.php"; ?>
	<?php hero("Fundamentos do PHP"); ?>
	<?php include "./footer.php"; ?>
	<?php $banana = "Banana"; ?>
	<?= $banana ?>
</body>

</html>