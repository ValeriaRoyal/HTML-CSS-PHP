<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
	
	<h1 id="bord">Exercicio 09</h1>
		<p id="bord">Efetue um lgoritmo em PHP receba um valor qualquer e calcule o seu fatorial(!), sabendo que fatorial de um número é 7!=7*6*5*4*3*2*1</p>

	<h2 id="bord">
		<?php

			$f = 7;
			
			for ($i=$f; $i>1; $i--) { 
				$f=$f*$i;
			}
					
			echo "Fatorial: ".$f;
		?>
	</h2>
</body>
</html>