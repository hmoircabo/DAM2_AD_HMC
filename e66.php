<?php 

	$random = mt_rand(0,10); 
	if($random % 2 == 0)
	{
		$paridad = "par";
	}
	else
	{
		$paridad = "impar";
	}
?>

<html>
	<head>
		<title>e66</title>
	</head>
	<body>
		<p><b><?php echo $random ?> es <?php echo $paridad ?></b></p>
	</body>
</html>