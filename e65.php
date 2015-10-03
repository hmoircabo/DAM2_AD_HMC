<html>
	<head>
		<title>e65</title>
	</head>
	<body>
		<p>
			<?php 
				for($i=0;$i < 10;$i++)
				{
					 echo mt_rand(1,100).", ";
					 if($i == 9)
					 {
					 	echo mt_rand(1,100);
					 }
				}

			?>
		</p>
	</body>
</html>