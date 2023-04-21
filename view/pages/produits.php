<?php 
if (isset($_GET['cat'])) {
	$cat = (int)$_GET['cat'];
	if ($cat != 0) {
	$produits = getProduitsCat($cat);
	$cat_name = getTypeProduitCat($cat);
		?>
		<h1><?php echo $cat_name['type_produit_libelle'] ?></h1>
		<?php foreach ($produits as $prod): ?>			
			<table class="produits">
				<tr>
					<td rowspan="2"><img src="webroot/img/<?php echo $prod['produit_image'] ?>.jpg" alt="<?php echo $prod['produit_image'] ?>"></td>
					<td class="produits_name"><?php echo $prod['produit_designation']; ?></td>
					<td class="produits_prix" rowspan="2"><?php echo $prod['produit_prix_unitaire']; ?>€ HT</td>
					<td class="produits_qte" rowspan="2">
						<a href="?page=produits&ref=<?php echo $prod['produit_code'] ?>">Ajouter au panier</a>
					</td>
				</tr>
				<tr>
					<td><?php echo $prod['produit_description']; ?></td>
				</tr>
			</table>
		<?php endforeach ?>
		<?php
	}
}else{
?>
	<h1>Nos produits</h1>
	<div class="cat-box">
		<?php foreach ($categorie as $cat): ?>
			<a class="cat" href="?page=produits&cat=<?php echo $cat['type_produit_code'] ?>">
				<img class="img-cat" src="img/<?php echo $cat['type_produit_image'] ?>.jpg" alt="image de fruit">
				<div class="cat-d">
					<h4><?php echo $cat['type_produit_libelle'] ?></h4>
				</div>
			</a>
		<?php endforeach ?>
	</div>
<?php
}
 ?>


