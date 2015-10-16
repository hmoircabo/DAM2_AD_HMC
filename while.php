<?php 

	$randomNumber = 0;
	while($randomNumber != 16)
	{	
		$randomNumber = mt_rand(0,50);
		echo $randomNumber."<br/>";
	}

?>