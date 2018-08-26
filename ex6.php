<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>

	<h1 id="bord">Exercicio 06</h1>

	<p id="bord">Efetue um algoritmo PHP que inicialize variaveis referentes a quatro notas de um aluno, calcule e imprima a média superior ou igual a 6.0 ou a mensagemde reprovação para média inferior a 6.0</p>

	<h2 id="bord" >
		<?php

		$n1 = 5.5;
		$n2 = 6.0;
		$n3 = 7.0;
		$n4 = 5.0;

		$me = (($n1+$n2+$n3+$n4)/4);

		if ($me < 6.0) {
			echo "REPROVADO !";
		} else {
			echo "APROVADO";
		}

		?>
	</h2>


</body>
</html>