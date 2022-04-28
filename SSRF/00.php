<?php

if(isset($_GET['url'])){

	$url = $_GET['url'];
	$content = file_get_contents($url);
	echo $content;
	
}else{
	echo "<!-- TODO: Implement the ?url= method-->";
}