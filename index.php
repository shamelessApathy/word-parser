<?php
require_once('constants.php');
require_once(GLOBALS);
$uri = $_SERVER['REQUEST_URI'];

$splode = explode('/', $uri);
if (!isset($splode[1]) || $splode[1] === "")
{
	return_view('view.home.php');
	sys_msg("No route defined");
	return;
}

if (isset($splode[1]) && $splode[1] !== "")
{
	$controller = $splode[1];
}

if (isset($splode[2]) && $splode[2] !== "")
{
	$method = $splode[2];
}
else
{
	$method = "home";
}
if (isset($splode[3]) && $splode[3] !== "")
{
	$param = $splode[3];
}
else
{
	$param = "";
}


$controllerFile = $controller . ".php";

require_once('/var/www/word-parser/controllers/' . $controllerFile);

$controllerClass = $controller . "Controller";
$controllerNew = new $controllerClass();

// Call controller and method and send apram if it exists, if not it'll just send NULL
$controllerNew->$method($param);

?>