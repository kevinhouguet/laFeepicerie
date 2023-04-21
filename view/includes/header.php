<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<div id="header">
	<div id="logo">
		<a href="index.php">La Fée Picerie</a>
	</div>
	<div id="menu">
		<!-- Ne pas enlever les lignes de commentaires vides, pour lutter contre les whites-spaces -->
		<ul>
			<li><a <?php echo ($title == 'Accueil - La Fée Picerie') ? $active : '' ; ?> href="index.php">Accueil</a></li><!--
		 --><li><a <?php echo ($title == 'Presentation - La Fée Picerie') ? $active : '' ; ?> href="?page=presentation">Présentation</a></li><!--
		 --><li><a <?php echo ($title == 'Produits - La Fée Picerie') ? $active : '' ; ?> href="?page=produits">Nos produits</a></li><!--
		 --><?php if (isset($_SESSION['nom'])): ?><!--
		 --><li><a <?php echo ($title == "Mon compte - La Fée Picerie") ? $active : ''; ?>href="?page=mon_compte"><?php echo $_SESSION['civilite'].'. '.$_SESSION['nom']; ?></a>
			 	<ul class="dropdown">
			 		<li><a href="?page=mon_compte">mon compte</a></li>
			 		<li><a href="?page=mon_panier">mon panier</a></li>
			 		<li>test2</li>
			 		<li>test2</li>
			 		<li><a href="?a=deconnexion">Déconnexion</a></li><!--
			--></ul><!--
		 --></li>		
		<?php else: ?><!--
		--><li><a <?php echo ($title == "Connexion - La Fée Picerie") ? $active : '' ; ?> href="?page=connexion">S'enregistrer</a></li><!--
		--></ul> 
		<?php endif ?>
	</div>
</div>
<div class="container">