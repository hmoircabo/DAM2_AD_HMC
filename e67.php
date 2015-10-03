<?php 

	$random = mt_rand(1,7); 
	if($random == 1)
	{
		$dia = "Lunes";
	}

	if($random == 2)
	{
		$dia = "Martes";
	}

	if($random == 3)
	{
		$dia = "Miercoles";
	}

	if($random == 4)
	{
		$dia = "Jueves";
	}

	if($random == 5)
	{
		$dia = "Viernes";
	}

	if($random == 6)
	{
		$dia = "Sabado";
	}

	if($random == 7)
	{
		$dia = "Domingo";
	}
?>

<html>
	<head>
		<title>e66</title>
	</head>
	<body>
		<p><b><?php echo $dia ?></b></p>
	</body>
</html>