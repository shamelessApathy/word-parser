<?php
require_once(HEADER);
?>

<h1 style='text-align:center;'>PHP Word Parser</h1>
<h4 style='text-align:center;'> Currently only parsing .docx files</h4>

<form style="margin:0 auto; text-align:center;" enctype="multipart/form-data" name="doc-file" method="POST" action="/parse/decide">
	<input type='file' name='file'/>
	<button type='submit'>Submit</button>
</form>
