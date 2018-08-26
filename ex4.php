<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
		<h1 id="bord">Exercicio 04</h1>

		<p id="bord">Efetue um algoritmo PHP que inicialize variaveis A,B,C e D.Efetue a soma entre A e C, a Multiplicação entre B e C e verifique se o resultado da soma é maior, menior ou iguial ao da multiplicação. Imprima: "A+C é maior que B+C ","A+C é menor que B+C","A+C é igual a B+C".</p>

<h2 id="bord">
		<?php

			$a = 2;
			$b = 5;
			$c = 1;
			$d = 4;

			$ad = a+c;
			$mu = b+d;

			if (ad>mu) {
				echo "A+C é maior que B+D ";
			} elseif (ad<mu) {
				echo "A+C é menor que B+D ";
			} else{
				echo "A+C é igual que B+D ";
			}
		?>
		</h2>

</body>
</html>