<?php
$filePath = $_GET["field2_name"];
$url = $filePath;

if(substr($url,-1) != chr(0)){
	$url = str_replace("/","",$url);
}else{
	$url = str_replace(chr(0),"",$url);
}
$file = fopen($url, "r");
$filecontent = fread($file,filesize($url));

echo '<div class="comment">' . $filecontent . '</div>';

?>
