<?php 
	
	$cantidad = 100;
	$array = Array();
	

	for($i = 0;$i < $cantidad;$i++)
	{
		$randomNumber = mt_rand(1,100);
		array_push($array,$randomNumber);
		echo $array[$i]." ";
	}

	/*function bubbleSort($array, $cantidad) --->NO ME FUNCIONA LA LLAMADA A ESTA FUNCION, SIN ELLA SI FUNCIONA...
	{*/
		for($i = 1;$i < $cantidad;$i++)
		{
			for($j = 0;$j < ($cantidad - $i);$j++)
			{
				if($array[$j] > $array[$j+1])
				{
					$aux = $array[$j];
					$array[$j] = $array[$j + 1];
					$array[$j + 1] = $aux;
				}
			}
		}
	

	for($i = 0;$i < $cantidad;$i++)
	{
		echo "<br/>[".$i."] = ".$array[$i];
	}
	

?>