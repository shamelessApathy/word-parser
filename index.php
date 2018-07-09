<?php


$uri = $_SERVER['REQUEST_URI'];

$splode = explode('/', $uri);

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

var_dump($controllerNew);

?>