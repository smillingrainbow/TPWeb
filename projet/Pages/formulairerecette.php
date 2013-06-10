<!doctype html> 
<html lang=fr >
<!-- page visible uniquement par un administrateur -->

	<!-- HEAD -->
	<head>
		<meta charset="utf-8">
		<title> TITRE </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<!-- BODY -->
	<body> 
		<!-- HEADER -->
		<header>
			<p>
				Formulaire 
			</p>
		<?php include 'navigation.inc'; ?>
		</header>

<!-- formulaire pour un article -->

		<section>
				<form autocomplete="on" method="post" name="myForm">
					<label for="titre">Titre : </label><input type="text" id="titre" name="titre" placeholder="titre" width="100px" autofocus><br>
					
					<textarea name="message" laceholder="Votre message ici" rows="4" cols="50"></textarea><br>
					<input type="submit" name="valider" value="Envoyer"><br>
				</form>
			</section>

		<?php include 'piedDePage.inc'; ?>
	</body>

</html>