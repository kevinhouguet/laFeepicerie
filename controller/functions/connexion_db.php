<?php 

try {	
	$db = new PDO('mysql:host='.$db['DB_SRV_ADD'].';dbname='.$db['DB_NAME'], $db['DB_LOGIN'], $db['DB_MDP']);
	$db->exec("set names utf8");
} catch (Exception $e) {
	die ('Connexion a la base : CELA NE MARCHE PAS');
}


 ?>