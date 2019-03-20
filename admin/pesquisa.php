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
    	
    	$select = $conn->query("SELECT * FROM pesquisa");
    	
    }
	catch(PDOException $e){
			echo $e;
	}
		
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Admin - Pesquisa de satisfação</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">



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
		
		th{
		    font-size:20px;
		}
		
		td{
		    font-size:18px;
		    color:#373435;
		    line-height:20px;
		}
		
	</style>
	
</head>
<body>

	<div class="container">

		<a href="admin.php"><span class="glyphicon glyphicon-arrow-left"></span></a>

		<div class="col-xs-10 col-xs-offset-1 col-md-12 col-lg-10">
		    
		    <h2 class="text-center">PESQUISA DE SATISFAÇÃO</h2><br>
		    
			<div class="panel">
		        
		        <div class="panel-body text-center">
		            
		            <div class="col-md-12 postagem">
		                <table class="table">
		                    <thead>
                                <tr>
                                    <th class="text-center">Nome</th>
                                    <th class="text-center">Procedimento</th>
                                    <th class="text-center">Data</th>
                                    <th class="text-center">Opções</th>
                                </tr>
                            </thead>
        					<tbody>
        					    <?php $result = $select->fetchAll(); foreach($result as $row){?>
            					    <tr>
            					        <td><?php  echo $row['nome'];?></td>
            					        <td><?php  echo $row['procedimento'];?></td>
            					        <td>
                                            <?php
                                                $data = $row['data'];
                                                echo date('d/m/Y',strtotime($data));
                                            ?>
                                        </td>
            					        <td>
            					            <a class="btn btn-success" href="pesquisa_detalhe.php?id=<?php echo $row['id_pesquisa']; ?>"><i class="far fa-eye"></i></a>
            					            <a class="btn btn-danger" href="excluir.php?id=<?php echo $row['id']; ?>&pagina=pesquisa"><i class="fas fa-times"></i></a>
            					        </td>
            						</tr>
        						<?php } ?>
        				    </tbody>
        				</table>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</body>

</html>