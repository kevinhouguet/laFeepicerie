<?php
	$page = isset($_GET['page']) ?  $_GET['page'] : 'accueil';
	$pageForTitle = str_replace("_", " ", $page);
	$title = ucfirst($pageForTitle)." - La Fée Picerie"; //variable utilisée pour le title
	$active = 'class="active"'; //variable utilisée pour récupéré l'état "actif" pour le menu

require ROOT.DS.'view'.DS.'includes'.DS.'header.php';

$a = isset($_GET['a']) ? $_GET['a'] : '';
switch ($a) {
	case 'connexion':
		//effectuer le script de connexion
		if (isset($_POST['login']) && isset($_POST['mdp'])) {
			require ROOT.DS.'model/userConnexion.php';
			$login = $_POST['login'];
			$mdp = $_POST['mdp'];
			if ($login != null && $mdp != null) {
				require ROOT.DS.'model/getUsers.php';
				userConnexion($login,$mdp);
			}else { echo "Vous devez rentrer vos identifiants</br>";
					echo "<a href=?page=connexion>Retourner à la page de connexion</a>";
			}
		}
		break;
	case 'deconnexion':
		session_destroy();
		header('Location:?page=accueil');
		break;
	default:
		require 'pageController.php';
		break;
}
require ROOT.DS.'view'.DS.'includes'.DS.'footer.php';

 ?>