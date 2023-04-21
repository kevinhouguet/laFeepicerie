<?php 
require ROOT.DS.'model/getUsers.php';
$user = getUserWNom($_SESSION['nom']);
 ?>
<div class="box">
	<h1>Adresse de Livraison</h1>
	<form action="?page=commande_conf" method="post">
		<div class="box-form">
			<label for="nom">Nom</label><input type="text" name="nom" value="<?php echo $user['utilisateur_nom'] ?>">
			<label for="prénom">Prénom</label><input type="text" name="prenom" value="<?php echo $user['utilisateur_prenom'] ?>">
			<label for="adresse">Adresse</label><input type="text" name="adresse" value="<?php echo $user['utilisateur_rue'] ?>">
			<label for="CP">Code postal</label><input type="text" name="CP" value="<?php echo $user['utilisateur_codePostal'] ?>">
			<label for="ville">Ville</label><input type="text" name="ville" value="<?php echo $user['utilisateur_ville'] ?>">
		</div>
		<input type="submit" value="Envoyer">
	</form>
</div>