<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>

 	<h1 id="bord">Exercicio 02</h1>

	<p id="bord">Escreva um programa em PHP que tenha variavel que armazena um formato de data no padrão "dia/mes/ano hora min" em seguida mostre a data atual e a hora(função interna do servidor PHP) no padrão solicitado.</p>

<h2 id="bord">
 	<?php

 		$dat = date('D/M/Y H:i');

 		echo "Data atual: ";
 		echo $dat;
 	?>
</h2>
</body>
</html>