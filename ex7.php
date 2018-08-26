<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
	
	<h1 id="bord">Exercicio 07</h1>

	<p id="bord">Efetue um algoritmo PHP que receba a altura e o sexo de uma pessoa, calcule e imprima o seu peso ideal, utilizando as seguintes fórmulas:<br>
	* para homens:(72.7* H)-58<br>
	* para mulheres:(62.1* H)-44.7
	
	</p>
	
	<h2 id="bord">
		<?php

			$altura = 1.80;
			$sexo = "FEMININO";

			if ($sexo == "FEMININO") {
				$t = ((62.1*$altura)-(44.7));
				echo "Peso ideal de uma mulher é ".$t;
			} else {
				$t = ((72.7*$altura)-(58));
				echo "Peso ideal de um homem é ".$t;
			}
		?>
	</h2>

</body>
</html>