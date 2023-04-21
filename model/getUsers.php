<?php 

function getUsers()
{
	
}

function getUser($login)
{
	global $db;

	$req = $db->prepare('SELECT * FROM utilisateur where utilisateur_mail = :login');
	$req->bindValue(':login',$login);
	$req->execute();
	return $req->fetch();
}

function getUserWNom($nom)
{
	global $db;

	$req = $db->prepare('SELECT * FROM utilisateur where utilisateur_nom = :nom');
	$req->bindValue(':nom',$nom);
	$req->execute();
	return $req->fetch();
}

function getUser_connect($login)
{
	global $db;

	$req = $db->prepare('SELECT utilisateur_mdp FROM utilisateur where utilisateur_mail = :login');
	$req->bindValue(':login',$login);
	$req->execute();
	return $req->fetch();
}

 ?>