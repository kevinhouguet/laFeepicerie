<?php 

function getTypeProduits()
{
	global $db;

	$req = $db->query("SELECT * FROM type_produit");
	return $req->fetchAll();
}

function getProduitsCat($cat)
{
	global $db;

	$req = $db->prepare("SELECT * FROM produit where type_produit_code = :cat");
	$req->bindValue(":cat",$cat);
	$req->execute();
	return $req->fetchAll();
}

function getTypeProduitCat($cat)
{
	global $db;

	$req = $db->prepare("SELECT type_produit_libelle FROM type_produit where type_produit_code = :cat");
	$req->bindValue(":cat",$cat);
	$req->execute();
	return $req->fetch();
}
function IsInRef($ref)
{
	global $db;

	$req = $db->prepare('SELECT COUNT(*) as entree FROM produit Where produit_code = :ref');
	$req->bindValue(':ref',$ref);
	$req->execute();
	$donnees = $req->fetch();
	return $donnees['entree'];
}
function getProduitWRef($listRef)
{
	global $db;

	$req = $db->prepare('SELECT * FROM produit Where produit_code IN ('.$listRef.')');
	$req->execute();
	return $req->fetchAll();
}
 ?>