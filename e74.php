<?php 

	$random = mt_rand(100,200)
	
?>
	<html>
		<head><title>e74</title></head>
		<body>
			<h3><b><u>Numero aleatorio entre 100 y 200, ambos inclusive</u></b></h3>
			<h1> Decimal: <?php echo $random ?>, Binario: <?php echo decbin($random) ?>, Octal: <?php echo decoct($random) ?>, Hexadecimal: <?php echo dechex($random) ?></h1>
		</body>
	</html>
