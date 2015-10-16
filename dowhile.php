<?php 

	$randomNumber = 0;
	
	do
	{	
		$randomNumber = mt_rand(0,50);
		echo $randomNumber."<br/>";
	}
	while($randomNumber != 16);
?>