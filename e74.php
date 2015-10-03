<?php 

	$random = mt_rand(1,100)
	
?>
	<html>
		<head><title>e74</title></head>
		<body>
			<h3><b><u>Numero aleatorio entre 1 y 100, ambos inclusive</u></b></h3>
			<h1> Decimal: <?php echo $random ?>, Binario: <?php echo decbin($random) ?>, Octal: <?php echo decoct($random) ?>, Hexadecimal: <?php echo dechex($random) ?></h1>
		</body>
	</html>
