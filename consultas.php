<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from veiculos where cidade like '%$filtro%' order by placa";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);



?>


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
				<h1>Consultas de Cadastro</h1>
				<br><br>

				<form method="get" action="">
					Filtrar: <input type="text" name="filtro" class="campo" required autofocus="">
					<input type="submit" value="pesquisar" class="btn">
				</form>

				<?php

				print "Resultado da pesquisada com a palavra <strong>$filtro</strong><br><br>";
				
				print "$registros registros encontrados.";

				print "<br><br>";

				while ($exibirRegistros = mysqli_fetch_array($consulta)) {
					
					$codigo = $exibirRegistros[0];
					$placa = $exibirRegistros[1];
					$cidade = $exibirRegistros[2];
					$km = $exibirRegistros[3];
					$email = $exibirRegistros[4];

					print "<article>";

					print "$codigo<br>";
					print "$placa<br>";
					print "$cidade<br>";
					print "$km<br>";
					print "$email";

					print "</article>";
				}

				mysqli_close($conexao);

				?>

			</section>
		</div>	
	</body>

</html>