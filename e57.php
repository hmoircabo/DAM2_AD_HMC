<?php 
	
	$array = Array(mt_rand(100,200), mt_rand(100,200), mt_rand(100,200), mt_rand(100,200), mt_rand(100,200))
	
?>
	<html>
		<head><title>e57</title></head>
		
		<body>
		<style type="text/css">
		.tabla{
				border-style: solid;
				border-color: black;
				border-spacing: 0px;
				}
		td{
			border-width:1px;
			border-style: solid;
			border-color: black;
			padding:10px;
		}
	
		</style>
			<h3><b><u>Numero aleatorio entre 100 y 200, ambos inclusive</u></b></h3>
			<table class="tabla">
				
				<?php foreach($array as $numeros)
							{
							print "<td>$numeros</td>";
							}
			    ?>
			   
			</table>
			
		</body>
	</html>
