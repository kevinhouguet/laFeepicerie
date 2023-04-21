<?php
	switch ($page) {
		case 'produits':
			require ROOT.DS.'model/getProduits.php';
			$categorie = getTypeProduits();
			if (isset($_GET['ref'])) {
				$produitDem = IsInRef($_GET['ref']);
				if ($produitDem) {
					require ROOT.DS.'model/panier.php';
					panierADD($_GET['ref']);
					header("Location:?page=produits");
				}
			}
			require ROOT.DS.'view'.DS.'pages'.DS.'produits.php';
			break;
		case 'livre_d_or':
			require ROOT.DS.'model/livredor.php';
			$livre = getLivre();
			if (isset($_POST['msg'])) {
				$msg = $_POST['msg'];
				$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
				$nom = isset($_POST['nom']) ? $_POST['nom'] : "";
				$ville = isset($_POST['ville']) ? $_POST['ville'] : "";
				$email = isset($_POST['email']) ? $_POST['email'] : "";
				$pattern = "/^[a-z0-9_\\\.]*@{1}[a-z]*.{1}[a-z]{2,4}$/";
				if ($msg == "") {
					$error = "Le message ne peut pas être vide";
				}elseif (!preg_match($pattern, $email)) {
					$error = "L'adresse mail n'est pas valide";
				}else{					
					setLivre($prenom,$nom,$ville,$email,$msg);
				}
			}			
			require ROOT.DS.'view'.DS.'pages'.DS.'livre_d_or.php';
			break;
		default:
			require ROOT.DS.'model/getSlider.php';
			$slide = getSlider();
			require ROOT.DS.'view'.DS.'pages'.DS.$page.'.php';
			break;
	}
?>