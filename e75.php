<?php 

	$random = mt_rand(1,100)
	
?>
	
	<html>
		<head><title>e75</title></head>
		<body>
		<style type="text/css">
		.numeros{
					background-color: aqua;
					border-style: solid;
					border-color: red;
					border-width: 1px;
					width: 20px;
					text-align: center;
					color: green;
				}

		</style>
		
			<h3><b><u>Numero aleatorio entre 1 y 100, ambos inclusive</u></b></h3>
			
			<input class="numeros" type="text" name="number" readonly="readonly"  value=<?php echo $random ?> >
			
		</body>
	</html>
