<div id="myCarousel" class="carousel slide">
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>
	  <!-- Carousel items -->
	  <div class="carousel-inner">
	  	<?php foreach ($slide as $s): ?>
	  		<div class="active item">
		    	<img src="<?php echo 'img/'.$s['news_image'].'.jpg' ?>">
		    	<div class="carousel-caption">
		    		<h4><?php echo $s['news_libelle'] ?></h4>
		    		<p><?php echo $s['news_content'] ?></p>
		    	</div>
	  		</div>
	  	<?php endforeach ?>
	  <!-- Carousel nav -->
	  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>

	<div class="new">
		<h2>Nouveautés et Actualités</h2><br>
			<ul>
				<li>Des produits spécialement conçut pour la Saint Valentin reste disponible jusqu'au 14 Mars. Achetez-vous aussi votre patisserie pour la personne que vous aimez. Différents goûts sous différentes formes.</li> <br>
				<li> Découvrez dans votre épicerie préférée des exclusivités non disponible sur le site.</li> <br>
				<li>C'est la fin des soldes mais chez nous, c'est les soldes toutes l'année.</li> <br>
				<li>Nous poursuivonts nos actions en faveur d'une meilleure alimentation pour nos clients.</li><br> 
				<li>Les produits bio ... Bientot dans votre épicerie favorite.</li> <br>
			</ul>
	</div>
	<div class="section">
		<div class="promo">
			<h2>Promotions</h2><br>
				<ul>
					<li> Pour votre première achat sur notre site, nous vous offrons un mug avec image au choix </li>
					<li> En magasin, pour deux boissons achetées, la troisième est offerte.</li>
					<li> Opération destockage pour les chocolats de la Saint Valentin (Voir en magasin)</li>
				<ul>
		</div>	
		<div class="meilleure">
			<h2>Meilleures Ventes</h2>
				<ul>	
					<li> Fabriqué à partir de farine, de sel et d'eau, le pain est le produit le plus demandé, c'est pour cela que nous vous offront du pain de qualité</li>
					<li> La poisson gazeuse à renommée internationnal, Coca-Cola !</li>
					<li> Evadez-vous en Chine le temps d'un repas avec nos repas chinois. </li>
				</ul>
		</div>
	</div>
</div>