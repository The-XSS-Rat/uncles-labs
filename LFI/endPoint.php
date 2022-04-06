<?php
$filePath = $_GET["field2_name"];
$url = $filePath;

$file = fopen($url, "r");
$filecontent = fread($file,filesize($url));

echo '<div class="comment">' . $filecontent . '</div>';

?>
