<?php
function return_view($view, $info =null) 
{
	require(VIEWS . '/' . $view);
	$info = $info;
}

// Returns a box in the top left corner of site showing error message

function sys_msg($msg)
{
	echo "<script> function dismiss(event){
		var parent = event.target.parentNode;
		parent.setAttribute('style','display:none');
	}</script>";
	echo "<div class='sys-msg'>$msg <button class='msg-closer' onClick='dismiss(event)'>X</button></div>";
}


// Returns a USER message generally meaning success and is outline in green

function user_msg($msg)
{
	echo "<div class='user-msg'>$msg</div>";
}
?>