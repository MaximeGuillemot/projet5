<?php

$page = (!empty($_GET['p'])) ? $_GET['p'] : 'home';

ob_start();
switch ($page)
{
	case 'home':
		require '../pages/home.php';
		break;
	default:
		require '../pages/error.php';
}
$content = ob_get_clean();

require '../pages/templates/default.php';

