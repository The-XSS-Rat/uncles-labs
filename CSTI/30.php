<?php

include ('instructions.php');

?>


<html>
<head> 
<meta charset="utf-8">

</head>
<body>

<div id="app"><?php echo htmlentities($_GET['input']);?></div>

<form method="GET">
    <input type="text" class="input" name="input" id="input"/>
    <input type="submit" name="submit" value="submit" id = "getData"/>
</form>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
<script>
      new Vue({
        el: '#app'
      });
  </script>
</body>
</html>