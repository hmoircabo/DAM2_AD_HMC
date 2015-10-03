<?php 

	$randomneg = rand(-100,100);
	$randomdec = mt_rand(1,100);
	$suma = $randomneg + $randomdec;
	$resta = $randomneg - $randomdec;
	$multi = $randomneg * $randomdec;
	$divi = $randomneg / $randomdec;
	$resto = $randomneg % $randomdec;
	$opu = -$randomneg;
	$inc = ++$randomneg;
		--$randomneg;
	$decr = --$randomneg;
		++$randomneg;
?>


	<html>
		<head><title>e68</title></head>
		<body><p>
			<b><?php print"$randomneg" ?> + <?php echo $randomdec ?> = <?php  echo $suma ?></b>
			<br/>
			<b><?php print"$randomneg" ?> - <?php echo $randomdec ?> = <?php  echo $resta ?></b>
			<br/>
			<b><?php print"$randomneg" ?> * <?php echo $randomdec ?> = <?php  echo $multi ?></b>
			<br/>
			<b><?php print"$randomneg" ?> / <?php echo $randomdec ?> = <?php  echo $divi ?></b>
			<br/>
			<b><?php print"$randomneg" ?> % <?php echo $randomdec ?> = <?php  echo $resto ?></b>
			<br/>
			<b>El opuesto de <?php print"$randomneg" ?> es <?php echo $opu ?></b>
			<br/>
			<b><?php print"$randomneg" ?>++ vale <?php echo $inc ?></b>
			<br/>
			<b><?php print"$randomneg" ?>-- vale <?php echo $decr ?></b>
			<br/>
			</p>
		</body>
	</html>