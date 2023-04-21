<?php 

function userConnexion($login,$mdp)
{
	$pattern = "/^[a-z0-9_\\\.]*@{1}[a-z]*.{1}[a-z]{2,4}$/";
	if (preg_match($pattern, $login)) {
		$user = getUser_connect($login);
		if ($user == null) {
			$error = "Nom d'utilisateur inconnu";
			echo $error;
		}else{	
			if ($user['utilisateur_mdp'] != $mdp) {
				$error = "Mot de passe incorrect";
				echo $error;
			}else{
				//a ce moment là l'utilisateur est authentifié
				//on récupère alors ces informations
				$uConnect = getUser($login);
				$_SESSION['nom'] = $uConnect['utilisateur_nom'];
				$_SESSION['civilite'] = $uConnect['utilisateur_civilite'];
				$_SESSION['lvl'] = $uConnect['type_utlisateur_code'];
				header('Location:?page=accueil');
			}
		}
	}else{
		$error = "Problème dans le login";
		echo $error;
	}	
}





 ?>