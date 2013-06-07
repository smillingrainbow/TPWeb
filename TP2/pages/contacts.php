<!doctype html> 
<html lang=fr >

<head>
	<meta charset="utf-8">
	<title> HTML & Co </title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
			Prendre contact
		</p>
		<nav>
		<?php include 'navigation.inc'; ?>

		</nav> 
	</header>

	<section>
		<form autocomplete="on" onsubmit="return validateform()" method="post" name="myForm">
			<label for="prenom">Prénom : </label><input type="text" id="prenom" name="prenom" placeholder="Prenom" autofocus><br>
			<label for="nom">Nom : </label><input type="text" id="nom" name="nom" placeholder="nom"><br>
			<label for="email">Email : </label><input type="email" id="email" name="email" placeholder="Email" required autocomplete="off"><br>
			<label for="raison">Raison : </label>
				<SELECT id="raison" name="Raison">
					<OPTION VALUE="personnem">Personnel</OPTION>
					<OPTION VALUE="professionnem">Professionnel</OPTION>
					<OPTION VALUE="autres">Autres</OPTION>
				</SELECT>
			<br>
			<textarea name="message" placeholder="Votre message ici" rows="4" cols="50"></textarea><br>
			<input type="reset" name="reset" value="Reset">
			<input type="submit" name="valider" value="Envoyer"><br>
		</form>
	</section>


		<!-- FOOTER -->
<!--	<footer class="piedPage">
		<HR>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
    			<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
			</a>
			|
			<img src="../images/logo.png" alt="Logo Polytech">
			|
			DI3-2012-2013
			|
			<a href="contacts.html" title="Contacts"> Contacts </a>
		
	</footer> -->
	<?php include 'piedDePage.inc'; ?>
	<script src="../documents/traitementFormulaire.js"></script>
</body>

</html>