<h1>Livre D'or</h1>
<p>Si vous avez apprécié notre relation clientèlle et notre savoir faire, vous pouvez dès à présent laisser votre message sur cette page.</p>
<?php if (isset($error)): ?>
	<div class="error"><?php echo $error ?></div>
<?php endif ?>
<div class="box">
	<h1>Poster un message</h1>
	<form action="" method="post">
		<div class="box-form">
			<label for="prenom">Prénom</label>
			<input type="text" name="prenom"><br>
			<label for="nom">Nom</label>
			<input type="text" name="nom"><br>
			<label for="ville">Ville</label>
			<input type="text" name="ville"><br>
			<label for="email">Email*</label>
			<input type="text" name="email"><br>
			<label for="msg">Message*</label>
			<textarea name="msg" id="" cols="30" rows="10" placeholder="Entrer votre message... Limité à 255 caractères..."></textarea>
		</div><br>
			<input type="submit" value="Envoyer">
	</form>
</div>
<?php foreach ($livre as $l): ?>		
	<div class="box">
			<h1><?php echo $l['livre_dor_prenom'].' '.strtoupper($l['livre_dor_nom']); ?> à dit, <span class="subtitle">le <?php echo $l['livre_dor_date'] ?></span></h1>
			<p><?php echo $l['livre_dor_commentaire'] ?></p>
	</div>
<?php endforeach ?>