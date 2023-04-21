<div class="box inline">
	<h1>Connexion</h1>
	<form action="?a=connexion" method="post">
		<table>
			<tr>
				<td class="label"><label for="login">Nom d'utilisateur</label></td>
				<td><input type="text" name="login"/></td>
			</tr>
			<tr>
				<td class="label"><label for="mdp">Mot de passe</label></td>
				<td><input type="password" name="mdp"></td>
			</tr>
		</table><br/>
		<input type="submit" value="Se connecter"/>
	</form>
</div>
<div class="box inline">
	<h1>Pas encore inscrits ?</h1>
	<form action="?a=register" method="post">
		<table>
			<tr>
				<td class="label"><label for="nom">Nom</label></td>
				<td><input type="text" name="nom"></td>
			</tr>
			<tr>
				<td class="label"><label for="prenom">Prenom</label></td>
				<td><input type="text" name="prenom"></td>
			</tr>
			<tr>
				<td class="label"><label for="mail">Adresse Mail</label></td>
				<td><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td class="label"><label for="conf_mail">Confirmer le mail</label></td>
				<td><input type="text" name="conf_mail"></td>
			</tr>
			<tr>
				<td class="label"><label for="mdp">Mot de passe</label></td>
				<td><input type="password" name="mdp"></td>
			</tr>
			<tr>
				<td class="label"><label for="conf_mdp">Confirmation du mot de passe</label></td>
				<td><input type="password" name="conf_mdp"></td>
			</tr>
		</table><br/>
		<input type="submit" value="Créer un compte"/>	
	</form>
</div>
