<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>Sistema de Cadastro</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<div class="container">
			<nav>
				<ul class="menu">
					<a href="index.php"><li>Cadastro</li></a>
					<a href="consultas.php"><li>Consultas</li></a>
				</ul>
			</nav>
			<section>
				<h1>Cadastro de Veículos</h1>
				<br><br>

				<form method="post" action="processa.php">
					<input type="submit" value="Salvar" class="btn">
					<input type="reset" value="Limpar" class="btn">
					<br><br>

					Placa<br>
					<input type="text" name="placa" class="campo" maxlength="40" required autofocus=""><br>
					Cidade<br>
					<input type="text" name="cidade" class="campo" maxlength="50" required><br>
					KM Atual<br>
					<input type="text" name="quilometragem" class="campo" maxlength="40" required><br>
					Email<br>
					<input type="email" name="email" class="campo" maxlength="50" required><br>

				</form>
			</section>
		</div>	
	</body>

</html>