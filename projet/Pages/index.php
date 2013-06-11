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
				Page d'accueil
			</p>
		<section>
			
			<form method="post" action="formconnexion.php" name="formconnexion">
				<label for="login"> Login : </label><input type="text" id="login" name="login" value="login" placeholder="login">
				<label for="pwd"> Password : </label><input type="password" id="pwd" name="pwd" value="passeword" placeholder="pwd">
				<input type="submit" name="valider" value="Envoyer"><br>
			</form>

			<a href="formulairerecette.php" title="formulairerecette"> Formulaire </a>
		</section>	
		<?php include 'navigation.inc'; ?>	
		</header>

		


		<?php include 'piedDePage.inc'; ?>
	</body>

</html>