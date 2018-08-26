<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
	
	<h1 id="bord">Exercicio 08</h1>
	
	<p id="bord">	Efetue um algoritmo PHP que fixado à uma 	variavel(um valor qualquer) e imprima os valores de 0 até o valor recebido,exemplo:<br>
	*Valor recebido = 9<br>
	*Impressão do programa - 0 1 2 3 4 5 6 7 8 9
	</p>

	<h2 id="bord">
		<?php

			$n = 9;
			echo "-";

			for ($i=0; $i < $n; $i++) { 
				echo " ".$i;
			}
			echo " ".$n;
		?>
	</h2>

</body>
</html>