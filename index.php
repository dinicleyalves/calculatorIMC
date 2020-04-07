<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Calculando IMC - PHP </title>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>
	<!-- content -->
	<div id="content">
		<!-- logo -->
		<div id="logo">
		</div>
		<!-- fim logo -->
		
		<!-- calculadora -->
		<div id="calculadora">
		<!-- formulario -->
		<form name="calc" method="get" enctype="multipart/form-data" action="resultado.php" class="form">
			
			<fieldset class="f"> 
				<label>
					<span class="span"> Seu Peso </span>
				<br/>
				<input type="text" name="peso" class="in">
				</label>
				<br />
				<label>
					<span class="span"> Sua Altura (Use Pontuação: 1.99 EM METROS)</span>
					<br/>
					<input type="text" name="altura" class="in"> 
				</label>
				<input type="submit" name="enviar" value="IMC!" class="btn">
			</fieldset>
		</form>
		<!-- fim formulario -->
	</div>
	<!-- fim Calculadora  -->
</div>
<!-- fim content -->
</body>
</html>