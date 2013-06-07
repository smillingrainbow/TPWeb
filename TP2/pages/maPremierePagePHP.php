<!doctype html> 
<html lang=fr >

<head>
	<meta charset="utf-8">
	<title> HTML & Co </title>
	<link id="css" rel="stylesheet" type="text/css" href="style.css">
</head>

<body> 
		<!-- HEADER -->
	<header>
		<section id="defilement">
			<p>
				Bonjour
			</p>
		</section>
		<p class="titre">
			PHP
		</p>
		<nav>
			<?php include 'navigation.inc'; ?>
		</nav>
	</header>

<?php
//string date ( string $format [, int $timestamp = time() ] )
//setTimeZone(new DateTimeZone('Europe/Paris'));
//$date = new DateTime(new DateTimeZone('Europe/Paris'));
date_default_timezone_set('Europe/Paris');
//echo $date->format('d-m-Y H:i:sP') . "\n";
echo date('l jS \of F Y h:i:s A');
?>
<?php include 'piedDePage.inc'; ?>



</body>

</html>