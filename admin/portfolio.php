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
    	
    	$select = $conn->query("SELECT titulo,imagem FROM portfolio");
    	
    }
	catch(PDOException $e){
			echo $e;
	}
		
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Admin - Portf贸lio</title>

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

		<div class="col-xs-10 col-xs-offset-1 col-md-12 col-lg-11">
		    
		    <h2 class="text-center">PUBLICA脟脮ES DO PORTF脫LIO</h2><br>
		    
			<div class="panel">
		        
		        <div class="panel-body text-center">
		            
		        <?php $result = $select->fetchAll(); foreach($result as $row){?>      
		            <div class="col-md-8 postagem">
		                <div class="col-md-4">
		                    <img src="<?php  echo $row['imagem'];?>" class="img-responsive">
		                </div>
		                <div class="col-md-8">
		
		                    <h4><?php  echo $row['titulo'];?></h4>
		                    
		                    <div class="col-md-12">
		                         <a class="btn btn-lg btn-default" href="excluir.php?id=<?php echo $row['imagem']; ?>&pagina=portfolio">Apagar Postagem</a>
		                    </div>
		                </div>
		                
		            </div>
		        <?php } ?> 
		           
		        </div>
		    </div>
		</div>
	</div>
</body>

</html>