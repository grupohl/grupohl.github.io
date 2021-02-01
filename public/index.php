<?php 
	// Construtor
	$hTags = [];
	require_once('../config/config.php');

	$curent = '';
	foreach ($hTags as $a) {
		$curent .= $a;
	};

?>
<!DOCTYPE html>
<html>
<head>
	<title>Olá, mundo!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://cdncss.ml/css/reset.css">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?= $curent ?>
	<link rel="stylesheet" href="../assets/css/scrollbar/scrollbar.css">
</head>
<body>
	<?= $header ?>
	<?= $content ?>
	<?= $footer ?>
</body>
</html>