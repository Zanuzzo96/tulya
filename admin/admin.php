<?php
    session_start();

    //Caso o usuário não esteja autenticado, limpa os dados e redireciona
    if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    	//Destrói
    	session_destroy();
    
    	//Limpa
    	unset ($_SESSION['login']);
    	unset ($_SESSION['senha']);
    	
    	//Redireciona para a página de autenticação
    	header('location:index.php');
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administração | Túlya B.</title>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


	<style type="text/css">
		*{
			background-color: #373435;
		}
		h1{
			text-align: center;
			font-family: arial;
			font-size: 3em;
			color:#dbae46;
			font-weight: bolder;
			margin-top: 10vh
		}

		a{
			text-align: center;
			border: 10px solid #dbae46;
			margin-top: 5vh;
			font-size: 2em;
			padding-top: 3vh;
			padding-bottom: 3vh;
			font-weight: bolder;
			color: #dbae46;
		}
		a:hover{
			text-decoration: none;
			background-color: #dbae46;
			color: #373435
		}
		
	</style>

</head>
<body>
<div class="col-md-10 col-md-offset-1">
	<h1>ESCOLHA UMA OPÇÃO</h1>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
		<a href="galeria_admin.php" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">POSTAR NA GALERIA</a>

		<a href="portfolio_admin.php" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">POSTAR NO PORTFOLIO</a>
		
		<a href="pesquisa.php" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">PESQUISA DE SATISFAÇÃO</a>

	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
		<a href="galeria.php" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">GALERIA</a>

		<a href="portfolio.php" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">PORTFOLIO</a>
		
		<a href="index.php" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">SAIR</a>
	</div>

	

</div>
</body>
</html>