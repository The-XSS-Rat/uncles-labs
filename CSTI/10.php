<?php

include ('instructions.php');

?>


<html>
<head> 
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.js"></script>
</head>
<body>
this will echo the $_GET parameter 'input':
<div ng-app><?php echo urldecode(str_replace("{","",$_GET['input']));?></div>

<form method="GET">
    <input type="text" class="input" name="input" id="input"/>
    <input type="submit" name="submit" value="submit" id = "getData"/>
</form>

</body>
</html>