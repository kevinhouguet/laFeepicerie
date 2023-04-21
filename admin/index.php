<?php
require 'includes/header.php';
require 'includes/menu.php';
$a = isset($_GET['a']) ? $_GET['a'] : "";
switch ($a) {
	case 'news':
		require 'pages/news.php';
		break;
	
	default:
		require 'pages/accueil.php';
		break;
}

require 'includes/footer.php';
 ?>