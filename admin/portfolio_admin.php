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
    
	try{
    	$conn = new PDO("mysql:host=localhost;dbname=tulyab_admin","tulyab_desenvolvimento","403apartamento");
    	
    	$select = $conn->query("SELECT mensagem,imagem FROM galeria ORDER BY data DESC");
    	
    }
	catch(PDOException $e){
			echo $e;
	}
		


		if(isset($_GET['id'])){
            $exclusao = $_GET['id'];
            $stmt = $conn->prepare('DELETE FROM blog WHERE titulo = :id');
            $stmt->bindParam(':id', $exclusao); 
            $stmt->execute();
            
            
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=blog.php'>";

           
        } ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Portfolio</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
	    
	    body{
	        background:#373435;
	        color:#dbae46;
	    }
	    
		h2{
			font-size: 4em;
		}
		
		.btn-adicionar{
		    background:#dbae46;
		    border-radius:0px;
		    color:#373435;
		}
		
		.glyphicon-arrow-left{
		    font-size:3em;
		    position:absolute;
		    margin-top:3vh;
		    color:#dbae46;
		}
		

	</style>
</head>
<body>

	<div class="container">

		<a href="admin.php"><span class="glyphicon glyphicon-arrow-left"></span></a>

		<div class="col-xs-8 col-xs-offset-2 col-md-12 col-lg-10">
		    
		    <h2 class="text-center">POSTAR NO PORTFOLIO</h2><br>
		    
			<form method="post" enctype="multipart/form-data" action="portfolio_backend.php">

				<div class="col-md-6">
				    <input type="file" required class="form-control input-lg" name="arquivo" id="file-input"><br>
				    <img id="preview-img" src="#" alt="" class="img-responsive "/>
				</div>
				
				<div class="col-md-6">
				    
				    <h3 class=text-center><strong>Selecione em qual categoria<br>será apresentada a foto</strong></h3>
				    <select class="form-control input-lg" name="mensagem">
					    <option value="ombreshadow">Ombré Shadow</option>
					    <option value="ombreline">Ombré Line</option>
					    <option value="microbladingfioafio">Microblading fio a fio</option>
					    <option value="micropigmentacaolabial">Micropigmentação labial</option>
					    <option value="micropigmentacaodeolhos">micropigmentação de olhos</option>
					    <option value="camuflagemdeestrias">camuflagem de estrias</option>
					</select><br>
				
					<input type="submit" class="col-md-12 btn btn-lg btn-adicionar" value="Adicionar a Galeria">
				
				</div>

			</form>

		</div>

	</div>
</body>

<script type="text/javascript">

	function readURL(input) {

	  if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function(e) {
	      $('#preview-img').attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  }
	}

	$("#file-input").change(function() {
	  readURL(this);
	});

</script>
</html>