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
			Bienvenue sur mon site!
		</p>
		<nav>
			<?php include 'navigation.inc'; ?>
		</nav>
	</header>

	<!-- SECTION -->
	<section>
		<p>
			Ce site a pour objectif de présenter différents aspects des langages HTML, CSS et Javascript.
		</p>

		<p>
			Vous trouverez un historique rapide sur la page <a href="histoire.html" title="Histoire">Histoire</a>.
			<br>
			Puis la page <a href="html.html" title="HTML">HTML</a> contient une description du langage HTML.
			<br>
			Nous nous concentrerons sur la version 5 du HTML, cette dernière est généralement associée au feuilles de styles CSS présentées dans la page <a href="css.html" title="CSS">CSS</a>.
			<br>
			Nous présentons les outils/logiciels necessaires pour développer un site web, dans la page <a href="outils.html" title="Outils">Outils</a>.
			<br>
			Nous dynamiserons un peu le site via la page <a href="javascript.html" title="JavaScript">JavaScript</a>.
			<br>
			Pour tout autre renseignement, n'hésitez pas à consulter notre page dédiée <a href="contacts.html" title="Contacts">Contacts</a>.
		</p>

		<p>
			Bonne lecture à tous
		</p>
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
</body>

</html>