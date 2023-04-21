<h1>Récapitulatif de la commande</h1>
<div>
	<table>
		<tr>
			<td><label for="nom">Nom :</label></td>
			<td><?php echo $_POST['nom'] ?></td>
		</tr>
		<tr>
			<td><label for="prenom">Prénom :</label></td>
			<td><?php echo $_POST['prenom'] ?></td>
		</tr>
		<tr>
			<td><label for="adresse">Adresse de Livraison :</label></td>
			<td><?php echo $_POST['adresse'] ?></td>
		</tr>
		<tr>
			<td><label for="CP">Code Postal :</label></td>
			<td><?php echo $_POST['CP'] ?></td>
		</tr>
		<tr>
			<td><label for="ville">Ville :</label></td>
			<td><?php echo $_POST['ville'] ?></td>
		</tr>
	</table>
</div>
<div>
	<table>
		<tr>
			<td>Total de la commande :</td>
			<td><?php echo $_SESSION[$_SESSION['nom']]['tt_cmd'] ?>€</td>
		</tr>
	</table>
</div>