<h1>Mon panier</h1>
<?php 
if (isset($_SESSION[$_SESSION['nom']])) {
	require ROOT.DS.'model/getProduits.php';
	if (isset($_POST['del'])) {
		$refDel = $_POST['del'];
		unset($_SESSION['qte'][$refDel]);
		$_SESSION[$_SESSION['nom']] = array_diff($_SESSION[$_SESSION['nom']], array($refDel));
	}
	$listRef = '"'.join('","',$_SESSION[$_SESSION['nom']]).'"';
	$panier_prod = getProduitWRef($listRef);
	if(isset($_POST['qte'])){
		$quantite = (int)$_POST['qte'];
		if ($quantite == 0) {
		 	$quantite = 1;
		 } 
		$_SESSION['qte'][$_POST['prod']] = $quantite;
	}
	 ?>
	<table class="panier">
		<tr>
			<th>#</th>
			<th>Libellé</th>
			<th>Quantité</th>
			<th>PU</th>
			<th>HT</th>
			<th>Action</th>
		</tr>
		<?php foreach ($panier_prod as $prod): ?>
			<tr>
				<td rowspan="2"><img src="" alt="<?php echo $prod['produit_image'] ?>"></td>
				<td><?php echo $prod['produit_designation'] ?></td>
				<td rowspan="2">
					<form action="" method="post">
						<input type="text" name="qte" placeholder="<?php echo $_SESSION['qte'][$prod['produit_code']] ?>">
						<input type="hidden" name="prod" value="<?php echo $prod['produit_code'] ?>">
						<input type="submit" value="Send">
					</form>
				</td>
				<td rowspan="2"><?php echo $prod['produit_prix_unitaire'] ?></td>
				<td rowspan="2"><?php echo $prod['produit_prix_unitaire'] * $_SESSION['qte'][$prod['produit_code']]?></td>
				<td rowspan="2">
					<form action="" method="post">
						<input type="hidden" name="del" value="<?php echo $prod['produit_code'] ?>">
						<input type="submit" value="X">
					</form>
				</td>
			</tr>
			<tr>
				<td><?php echo $prod['produit_description'] ?></td>
			</tr>
		<?php endforeach ?>
			<tr>
				<td colspan="4">Total HT</td>
				<?php
					$total = 0;
					foreach ($panier_prod as $prod) {
						$total = $total + $prod['produit_prix_unitaire'] * $_SESSION['qte'][$prod['produit_code']];
					}
				 ?>
				<td><?php echo $total ?></td>
			</tr>
			<tr>
				<td colspan="4">Frais de livraison</td>
				<td>8.00</td>
			</tr>
			<tr>
				<td colspan="3">TVA</td>
				<td>20%</td>
				<td><?php echo (($total+8)*0.2) ?></td>
			</tr>
			<tr>
				<td colspan="4">Total TTC</td>
				<td><?php $total = (($total+8)*1.2); echo $total ?></td>
			</tr>
	</table>
	<form action="?page=commande_fact" method="post">
		<?php $_SESSION[$_SESSION['nom']]['tt_cmd'] = $total; ?>
		<input type="submit" value="Valider ma commande">
	</form>
	<?php
}else{
	echo "Votre panier ne contient aucun article";
}
