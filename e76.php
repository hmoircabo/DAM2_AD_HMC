<?php 

	$random = mt_rand(1,100);
?>
	<html>
		<head><title>e76</title></head>
		<body>
			<h3><b><u>Numero aleatorio entre 1 y 100, ambos inclusive</u></b></h3>
			<h1> <?php echo $random.", ".gettype($random) ?>
			</h1>
		</body>
	</html>
