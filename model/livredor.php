<?php 
function getLivre()
{
	global $db;

	$req = $db->query('SELECT * FROM livre_dor ORDER BY livre_dor_code DESC');
	return $req->fetchAll();
}
function setLivre($prenom,$nom,$ville,$email,$msg)
{
	global $db;

	$req = $db->prepare("	INSERT INTO livre_dor(livre_dor_prenom, livre_dor_nom, livre_dor_ville, livre_dor_mail, livre_dor_commentaire, livre_dor_date) 
							VALUES(:prenom,:nom,:ville,:email,:msg,now())");
	$req->bindValue(":prenom",$prenom);
	$req->bindValue(":nom",$nom);
	$req->bindValue(":ville",$ville);
	$req->bindValue(":email",$email);
	$req->bindValue(":msg",$msg);
	$req->execute();
	header("Location:?page=livre_d_or");
}
 ?>