<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stile.css">
	</head>
	<body>


	<h1 id="bord">Exercicio 03</h1>

	<p id="bord">Efetue um codigo em PHP que inicialize uma variavel com um determinado valor e verifique se esse valor é positivo, negativo ou igual a zero.Imprima na tela: Valor Positivo,Valor Negativo, Igual a Zero.
	</p>
	
	<h2 id="bord">
	
	<?php

		$valor = 12;

		if ($valor> 0) {
			echo "Valor Positivo !";
		} elseif ($valor< 0) {
			echo "Valor Negativo !";
		}elseif ($valor==0) {
			echo "Valor igual a Zero !";
		} 
	?>
		</h2>
	</body>
</html>