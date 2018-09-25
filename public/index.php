<?php

use App\Config;
use App\DB\DBConnect;

require '../app/Autoloader.php';
App\Autoloader::initiateAutoloader();

$config = Config::getInstance();
$db = new DBConnect(
	$config->getSetting('db_name'), 
	$config->getSetting('db_user'), 
	$config->getSetting('db_pass'), 
	$config->getSetting('db_host'));

$page = (!empty($_GET['p'])) ? $_GET['p'] : 'home';

ob_start();
switch ($page)
{
	case 'home':
		require '../pages/home.php';
        break;
    case 'items':
		require '../pages/items.php';
		break;
	default:
		require '../pages/error.php';
}
$content = ob_get_clean();

require '../pages/templates/default.php';

