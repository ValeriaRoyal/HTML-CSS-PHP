<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>

	<h1 id="bord">Exercicio 05</h1>

	<p id="bord">Efetue um algoritmo PHP que inicialize variaveis para os valores A, B e imprima-os em ordem crescente em relação aos seus valores.Exemplo, para A=5, B=4.Você deve imprimir na tela: "4 5".</p>

	<h2 id="bord">
		<?php

			$a = 5;
			$b = 4;
			

			for ($i=0; $i <1 ; $i++) { 
				for ($j=i+1; $j <2 ; $j++) { 
					if ($a>$b) {
						$t = $b;
						$b = $a;
						$a = $t;
					}
				}
			}
			echo "Ordem crescente: ".$a." ".$b;
		?>	
	</h2>
</body>
</html>