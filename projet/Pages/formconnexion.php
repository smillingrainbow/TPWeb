<?php
$server = 'locahost';
$user = 'root';
$password ='';

if($link = mysqli_connect( $server,$user,$password)){
	if ($id_BD = mysqli_select_db($link, $database)) {
		echo "succes de la connexion";
	} else {
		die("echec de la connexion $database");
	}

}

?>