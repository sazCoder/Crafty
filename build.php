<?php
$src = "";
$files = array("core.js","intro.js","2D.js","DOM.js","extensions.js","canvas.js","controls.js","animation.js",
			   "drawing.js", "groups.js", "isometric.js", "sound.js", "text.js", "health.js", "scores.js", "loader.js", "outro.js");
			   
foreach($files as $file) {
	$src .= file_get_contents("src/".$file);
	$src .= "\n\r\n\r";
}

file_put_contents("crafty.js", $src);
?>
<h1>Done: Please YUI Compress!</h1>