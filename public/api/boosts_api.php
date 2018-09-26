<?php

use App\Config;
use App\DB\DBConnect;
use App\DB\ItemsDB;

require '../../app/Autoloader.php';
App\Autoloader::initiateAutoloader();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$config = Config::getInstance();
$db = new DBConnect(
	$config->getSetting('db_name'), 
	$config->getSetting('db_user'), 
	$config->getSetting('db_pass'), 
    $config->getSetting('db_host'));
    
$itemsDB = new ItemsDB($db);
$itemBoosts = $itemsDB->getItemsBoosts();
echo json_encode($itemBoosts);