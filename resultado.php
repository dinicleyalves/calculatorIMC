<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Calculando IMC - PHP </title>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>
	<!--- content -->
	<div id="content">
		<!--- logo -->
		<div id="logo">
		</div>
		<!--- fim logo -->

		<!-- IMC -->
		<div id="resultado">
			
		<?php 
		$peso = $_GET['peso'];
		$altura = $_GET['altura'];

		$conta1 = $altura*$altura;
		$conta2 = $peso/$conta1;

		$resultado = number_format($conta2);

		if(isset($resultado) && $resultado != '0'){;
				echo '<h1> Seu IMC é:</h1>';
				echo '<h2>'.$resultado. '</h2>';
		}else{
			echo "<h1> Por favor, utilize apenas numeros!</h1>";
		}
		?>
		</div>
		<!-- fim IMC -->

	</div>
	<!--- fim content -->
</body>
</html>