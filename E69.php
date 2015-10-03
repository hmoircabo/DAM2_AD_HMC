<?php 
	$real = mt_rand()/mt_getrandmax();
	$realcen = -1000 + mt_rand()/mt_getrandmax()*2000;
	$decimals = floor($realcen*1000)/1000;
	$decens = floor($realcen/10)*10;
?>
	<html>
		<head><title>e69</title></head>
		<body>
			<p><b>Numero real aleatorio entre 0 y 1:</b> <?php print"$real" ?>
			<br/>
			<b>Numero real aleatorio entre -1000 y 1000:</b> <?php print"$realcen" ?>
			<br/>
			<b>Segundo numero truncado a las milesimas:</b> <?php print"$decimals" ?>
			</br>
			<b>Segundo numero truncado a las decenas:</b> <?php print"$decens" ?>
			</p>
		</body>
	</html>