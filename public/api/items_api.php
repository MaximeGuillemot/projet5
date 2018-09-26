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
$itemsList = $itemsDB->getAllItems('App\Items');
$itemsCount = $itemsDB->countItems();
$item_data['data'] = array();

if($itemsCount > 0)
{
    foreach($itemsList as $item)
    {
        array_push($item_data['data'], $item->getArrayInfo());    
    }

    echo json_encode($item_data['data']);
}
else
{
    echo '<p>No item could be found.</p>';
}