<?php

	$host = '127.0.0.1';
	$user = 'root';
	$password ='';
	$database = 'projetWeb';
	$login = $_POST['login'];
	$pwd = $_POST['pwd'];
	if($link = mysqli_connect($host,$user,$password)){
		echo "succes de la connexion 1";
		if ($id_BD = mysqli_select_db($link, $database)) {
			echo "succes de la connexion";
			$query = 'SELECT * FROM Connexion';
			if ($result = mysqli_query($link,$query)){
					while ($row=mysqli_fetch_assoc($result)) {
					$log = $row['login'];
					$pass =  $row['pwd'];
					echo("$log $pass");
					$complog = strcmp($log, $login);
					$comppwd = strcmp($pass, $pwd);
					$test = ($comppwd == 0);
					echo("$test");
					if (($complog == 0) & ($comppwd == 0)) {
						echo "comparatif";
						header('Location: formulairerecette.php');
					}
				}
				mysqli_free_result($result);
			}
		} else {
			die("echec de la connexion $database");
		}
		mysqli_close($link);
	}else {
		die("Echec de la connexion au server $host");
	}





?>