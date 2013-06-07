<!doctype html> 
<html lang=fr >

<head>
	<meta charset="utf-8">
	<title> HTML & Co </title>
	<link id="css" rel="stylesheet" type="text/css" href="style.css">
	
</head>

<body class="langage" > 
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
		<nav class="langage">
			<?php include 'navigation.inc'; ?>
		</nav>
	</header>

	<section class="langage" id="flottantL">
		<p >
			Cliquez sur la lampe pour allumer et éteidre.<br>
			<img src="../images/bulboff.gif" alt="lampe éteinte" id="ampoule" onclick="changeimage()">
		</p>
	</section>
	<section id="flottantR">
		<p id="date">

		</p>

		<p >
			Pour changer la mise en page, cliquez sur le bouton : <input type="submit" name="validerCSS" value="Changer CSS" onclick="changestyle();"><br>
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
	<script src="../documents/changeimage.js"></script>
	<script src="../documents/date.js"></script>
	<script src="../documents/changestyle.js"></script>
	
</body>

</html>