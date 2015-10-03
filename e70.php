<?php 
	$realcen = -100 + mt_rand()/mt_getrandmax() *200;
	$realdec = mt_rand(1,10);
	$suma = $realcen + $realdec;
	$resta = $realcen - $realdec;
	$multi = $realcen * $realdec;
	$divi = $realcen / $realdec;
	$resto = $realcen % $realdec;
	$opu = -$realcen;
	$inc = ++$realcen;
		--$realcen;
	$decr = --$realcen;
		++$realcen;
?>
	<html>
		<head><title>e70</title></head>
		<body>
			<p><b><?php print"$realcen" ?> + <?php echo $realdec ?> = <?php  echo $suma ?></b>
			<br/>
			<b><?php print"$realcen" ?> - <?php echo $realdec ?> = <?php  echo $resta ?></b>
			<br/>
			<b><?php print"$realcen" ?> * <?php echo $realdec ?> = <?php  echo $multi ?></b>
			<br/>
			<b><?php print"$realcen" ?> / <?php echo $realdec ?> = <?php  echo $divi ?></b>
			<br/>
			<b><?php print"$realcen" ?> % <?php echo $realdec ?> = <?php  echo $resto ?></b>
			<br/>
			<b>El opuesto de <?php print"$realcen" ?> es <?php echo $opu ?></b>
			<br/>
			<b><?php print"$realcen" ?>++ vale <?php echo $inc ?></b>
			<br/>
			<b><?php print"$realcen" ?>-- vale <?php echo $decr ?></b>
			<br/></p>
		</body>
	</html>