

<!DOCTYPE html>
<html>
<head>
	<title>Practica 1</title>
</head>
<body>
	<?php 
		$a = mt_rand(1,9);
		$b = mt_rand(1,9);
		$c = mt_rand(1,9);
		echo $a, $b, $c."\n";
		if($a >= $b)
		{
			if($a > $c)
			{
				if($b >= $c)
				{
					echo $a.", ".$b.", ".$c;
				}
				else if($c >= $b)
				{
				echo $a.", ".$c.", ".$b;
				}
			}
			else if($c > $a)
			{
				if($c > $b)
				{
					if($b > $a)
					{
						echo $c.", ".$b.", ".$a;
					}
					else if($a > $b)
						{
							echo $c.", ".$a.", ".$b;
						}
				}
			}
		}
		else if($b > $a)
		{
			if($b > $c)
			{
				if($a > $c)
				{
					echo $b.", ".$a.", ".$c;
				}
				else echo $b.", ".$c.", ".$a;
			}
		}
		else if($c > $a)
		{
			if($c > $b)
			{
				if($b >= $a)
				{
					echo $c.", ".$b.", ".$a;
				}
				else if($a > $b)
				{
					echo $c.", ".$a.", ".$b;
				} 
			}
		}

	?>
</body>
</html>