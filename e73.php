<?php 

	function generateRandomString($length=5, $uc = false)
	{
		$characters = '0123456789abc';
		$charactersLength = strlen($characters);
		$randomString = '';
		for($i = 0; $i < $length;$i++)
		{
			$randomString .=$characters[mt_rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	function generateRandomDecString($length=2, $uc = false)
	{
		$characters = '0123456789abc';
		$charactersLength = strlen($characters);
		$randomString = '';
		for($i = 0; $i < $length;$i++)
		{
			$randomString .=$characters[mt_rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

?>
<?php 
	$second = generateRandomDecString().".".generateRandomDecString();
	$first = generateRandomString();
?>
<html>
	<head>
		<title>e73</title>
	</head>
	<body>
		La cadena entera <b><?php echo $first ?></b> se convierte al entero <?php floor($first/10)*10 ?>
		<br/>
		La cadena real <b><?php echo $second ?></b> se convierte al real 
	</body>
</html>