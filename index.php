<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="monstyle.css">
	<title>Structure Web PHP</title>
</head>
<body>

	<!-- Partout où vous verrez id="" ou class=" permet la mise en forme dans le fichier monstyle.css -->

	<?php
	// Inclusion du fichier web header.php
	include('header.php');

	// Inclusion du fichier web menu.php
	include('menu.php');

	// Inclusion du fichier web menu.php
	include('contenu_web.php');

	// Inclusion du fichier web footer.php
	include('footer.php');

	?>	
	
</body>
</html>