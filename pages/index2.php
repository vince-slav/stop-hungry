<!DOCTYPE HTML>

<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
		     .cab{
				 text-align: center;
			 }
		     .cons{
				 text-align: center;
			 }
		
		</style>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<div class="cab">
				<h1>ADMINISTRADOR	</h1>
				<p>Cadastro De Produtos</p>
			    </div>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" method="POST" action="insert.php">
				
				<input type="text" name="nome" required placeholder="Nome do produto" autofocus/><br>
		
				<input type="text" name="valor" required placeholder="Valor do produto" />
				
				<input type="text" name="tipo" required placeholder="Tipo de comida" /><br/>
				<input type="submit" value="CADASTRAR" autofocus />
			</form>
			<hr>
			<h3 class="cons">Consulta de produtos</h3><br/>
			<div class="cons"> 
			<form id="for" method="POST" action="visu.php">
					<input type="text" name="prod" placeholder="Insira o critério" /><br>
				
					<input type="submit" value="CONSULTAR"/><br/><br/>
					<a href="peds.php">VISUALIZAR PEDIDOS</a><br/><br/>
					<a href="index.html"> HOME</a>
					
					
			</form>
			</div>	


	</body>
</html>