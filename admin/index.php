<?php

	if (isset($_POST['acessar'])){
			
		$login = trim(strip_tags($_POST['login']));
		$senha = trim(strip_tags($_POST['senha']));
			
			if($login === "tulyab" && $senha === "882266" ){
			    
			    session_start();
	
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                    	
				header("Location: admin.php");
						
			}else{
				//destroi a sessao
                session_destroy();
                //limpa as sessoes
                unset ($_SESSION['login']);
                unset ($_SESSION['senha']);
                //notifica o usuario
                echo '<h5 class="text-center" style="color:#fff">Login ou senha inválidos, tente acessar novamente</h5>';
                echo '<meta http-equiv="refresh" content = "3" />';
			}
	}
            
          

	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Administração | Túlya B.</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">
		*{padding: 0px;margin: 0px;}

		body{
			background-color: #373435
		}

		.box-topo h3{
			font-weight: bolder;
		}

		.bg-login{
			height: 100%;
			background-color: #fff;
			margin-top: 10%;
		}
		.btn-logar{
			border-radius: 0px;
			margin-bottom: 7%;
			background-color: #dbae46;
			color:#000;
		}
		a{
		    color:#000;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 bg-login">
			<div class="col-xs-12 col-md-10 col-md-offset-1 text-center box-login">
				<div class="box-topo">
					<h3>PAINEL ADMINISTRATIVO</h3>
				</div>
				<form method="POST">
					<br><h4>Login</h4>
					<input type="text" name="login" class="form-control input-lg" placeholder="Digite seu login"><br>
					<h4>Senha</h4>
					<input type="password" name="senha" class="form-control input-lg" placeholder="*********"><br>
					<input type="submit" name="acessar" value="Acessar" class="btn btn-lg col-xs-12 col-md-12 btn-logar"><br>
				</form>
				
				    <a href="../index.html" class="btn btn-lg col-xs-12 col-md-12 btn-logar">Voltar ao site</a>
				    
			</div>
		</div>
		
	</div>
</body>
</html>