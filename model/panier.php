<?php 

function panierADD($prod)
{
	$user = $_SESSION['nom'];
	$_SESSION[$user][] = $prod;
	$_SESSION['qte'][$prod] = "1";
}

 ?>