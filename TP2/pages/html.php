<!doctype html> 
<html lang=fr >

<head>
	<meta charset="utf-8">
	<title> HTML & Co </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="langage"> 
	<!-- HEADER -->
	<header>
		<section id="defilement">
			<p>
				Bonjour
			</p>
		</section>
		<p class="titre">
			Le langage HTML
		</p>
		<nav class="langage">
			<?php include 'navigation.inc'; ?>
		</nav>
	</header>

	<section class="langage">
		<h3>
			Extrait du W3C :
		</h3>

		<p>
			HTML est le langage permettant de décrire la structure des pages WEB. Il donne aux auteurs de pages WEB, les moyens de :
		</p>
			<ul>
				<li>
					Publier des documents en lignes avec des titres, du texte, des tableaux, des listes, des photos, etc.
				</li>
				<li>
					Récupérer des informations en ligne par l'intermédiaire de liens hypertextes.
				</li>
				<li>
					Concevoir des informations des formulaires pour effectuer des transactions avec des services distants(recherche d'informations, faire des réservations, commander des produits, etc).
				</li>
				<li>
					Inclure des feuilles de calculs, des clips audio ou vidéo, et bien d'autres applications directement dans leurs documents.
				</li>
			</ul>

		<p>
			Avec le HTML, les auteurs décrivent la structure des pages a l'aide de balisage. Les éléments permettent de hierarchiser du langage, étiquent différent contenus tels que "paragraphe", "liste", "tableau", et ainsi de suite.
		</p>

		<p>
			Vous trouverez un historique rapide <a href="histoire.html" title="Histoire">ici</a>.
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