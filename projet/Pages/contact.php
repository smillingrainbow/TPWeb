<!doctype html> 
<html lang=fr >


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
				Contact
			</p>	
		<?php include 'navigation.inc'; ?>	
		</header>

		<section>
				<form autocomplete="on" method="post" name="myForm">
					<label for="prenom">Prénom : </label><input type="text" id="prenom" name="prenom" placeholder="Prenom" autofocus><br>
					<label for="nom">Nom : </label><input type="text" id="nom" name="nom" placeholder="nom"><br>
					<label for="email">Email : </label><input type="email" id="email" name="email" placeholder="Email" required autocomplete="off"><br>
					<textarea name="message" placeholder="Votre message ici" rows="4" cols="50"></textarea><br>
					<input type="reset" name="reset" value="Reset">
					<input type="submit" name="valider" value="Envoyer"><br>
				</form>
			</section>

		<?php include 'piedDePage.inc'; ?>
	</body>

</html>