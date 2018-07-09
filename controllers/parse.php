<?php 

class parseController {
	public function sendToParse($file = null)
	{
		require_once('./parse.php');
		$parse = new Parse();
		$res  = $parse->talk();
		var_dump($res);
	}

}

$pc = new parseController();
$pc->sendToParse();


?>