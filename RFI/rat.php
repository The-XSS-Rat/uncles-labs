<?php
if(isset($_GET["field2_name"])){
	$filePath = $_GET["field2_name"];
	$url = $filePath;

	$file = fopen($url, "r");
	$filecontent = fread($file,filesize($url));
	
	$img = imageCreateFromString($filecontent);
	if($img){
		header('Content-type: image/png');
		echo '<div class="comment"><h3>Your image content:' . imagepng($img) .'</h3><hr></div>';
	}else{
		echo '<div class="comment"><h3>Your image content:' . $filecontent .'</h3><hr></div>';
	}

}else{
	$loc = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]?field2_name=image0.jpg";
	header( "Location: $loc");
	exit;
}
?>