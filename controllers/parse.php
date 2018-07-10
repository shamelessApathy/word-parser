<?php 

class parseController {
	public function decide()
	{
		$file = $_FILES['file'];
		$originalFileName = $file['name'];
		$splode = explode(".",$file['name']);
		$length = count($splode);
		// Get last iteration in the array, this SHOULD almost always be the file extension
		$position = $length -1;
		$ext = $splode[$position];
		$tmp_name = $file['tmp_name'];
		$size = $file['size'];


		// See which type of file it is , then send to appropriate parsing class
		switch($ext)
		{
			case "docx": $this->sendToDocx($tmp_name);
			break;
			case "odt" : echo "we've got a regular ODT";
			break;
			default: echo "we're in the default";
			break;
		}
	}
	private function sendToDocx($tmp_name)
	{
		require_once(CLASSES . '/parseDOCX.php');
		$toDocX = new ParseDocX();
		$content = $toDocX->read_file_docx($tmp_name);
		$forStorage = nl2br($content);
		$finishedPath = FINISHED . time() . "/$tmp_name";
		file_put_contents($finsihedPath, $forStorage);
		$dataArray = ("path"=> $finishedPath);
		return_view('view.success.php', $dataArray);
	}

}



?>