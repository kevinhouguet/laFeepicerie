<?php 


function getSlider()
{
	global $db;

	$req = $db->query('SELECT * FROM news WHERE news_type = "slider"');
	return $req->fetchAll();
}
 ?>