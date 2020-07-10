<?php

include_once("conexao.php");

$placa = $_POST['placa'];
$cidade = $_POST['cidade'];
$km = $_POST['quilometragem'];
$email = $_POST['email'];

$sql = "insert into veiculos (placa, cidade, km, email) values ('$placa', '$cidade', '$km','$email')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

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
				<h1>Confirmação de Cadastro</h1>
				<br><br>

				<?php

				if($linhas == 1){
					print "Cadastro efetuado com sucesso!";
				}else{
					print "Cadastro NÃO efetuado. <br> Já existe um cadastro com este email.";
				}

				?>
		
			</section>
		</div>	
	</body>

</html>