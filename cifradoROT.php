<?php 
/*
$cadena = "hola";
$cadena = str_rot13($cadena);
	echo $cadena;
*/

	define("ROT",13);
	define("ABC",26);
	$string = "hola john";
	$length = strlen($string);
	$change = "";
	$abecedario = "abcdefghijklmnopqrstuvwxyz";

	for($i = 0;$i < $length;$i++)
	{
		$letra = chr(ord($string[$i]));
		$rotation =  ord($string[$i]);

		if($rotation+ROT>ord("z"))
		{
			$change = chr($rotation+ROT-ABC);
			//$change =chr(ord("a")+$rotation+ROT-ord("z")-1) ;
			//echo $change;
		}
		else
		{
			$change = chr($rotation+ROT);//NO HE CONSEGUIDO QUE DE LA VUELTA ASI QUE HE TENIDO QUE PARCHEARLO
			//echo $change;
		}

		echo $letra." = ".$change."<br/>";
	}

?>