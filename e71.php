<?php 

	$word = "Retamar";

?>
<!DOCTYPE html>
<html>
<head>
	<title>e71</title>
</head>
<body>
<p>
	Una letra aleatoria de la palabra <?php echo $word ?> es <b><?php echo substr($word,rand(1,6),1) ?></b>
</p>
</body>
</html>