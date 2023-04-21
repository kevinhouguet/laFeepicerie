<?php 
define('FILE', __FILE__);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require ROOT.DS.'controller/config.php';
require ROOT.DS.'controller/functions/connexion_db.php';
session_start();
require ROOT.DS.'controller/globalController.php';

?>