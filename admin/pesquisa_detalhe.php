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
    
    $id= $_GET['id'];
    
	try{
    	$conn = new PDO("mysql:host=localhost;dbname=tulyab_admin","tulyab_desenvolvimento","403apartamento");
    	
    	$select = $conn->query("SELECT * FROM pesquisa WHERE id_pesquisa = $id");
    	
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
		
		.panel{
            background:inherit;
            border-color: #dbae46;
        }
        
        .panel-heading{
            font-size:20px;
            background-color:#DBAE46;
            color:#373435;
            font-weight:bold;
        }
        
        .panel-body{
            background: inherit;
            border:none;
        }
        
        .table td{
          border:none !important;
          font-size:20px;
        }

		
	</style>
	
</head>
<body>

	<div class="container">

		<a href="pesquisa.php"><span class="glyphicon glyphicon-arrow-left"></span></a>

		<div class="col-xs-10 col-xs-offset-1 col-md-12 col-lg-10">
		    
		    <h2 class="text-center">DETALHES DA PESQUISA</h2><br>

		        <?php $result = $select->fetchAll(); foreach($result as $row){?>      
		  

        		<div class="panel">
        		  	<div class="panel-heading text-center">Identificação</div>
        
        		  	<div class="panel-body">
        		  	    <div class="col-sm-12 col-md-6 text-center">
        		    	    <h4>Nome: <?php echo $row['nome']?></h4>
        		    	</div>
        		    	
        		    	<div class="col-sm-12 col-md-6 text-center">
        		    	    <h4>Procedimento: <?php echo $row['procedimento']?></h4>
        		    	</div>
        		  	</div>
        		</div>
        
        		<div class="panel">
        		  	<div class="panel-heading text-center">Pesquisa de satisfação</div>
        
        		  	<div class="panel-body">
        		  
        		    	<div class="">
        					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        						<table class="table">
        						    <tbody>
        						        <tr>
        						            <td>Inicio do serviço?</td>
        						            <td>
        						                <?php
        						                    $estrelas_inicio = $row['inicio_servico'];
        						                    for($i = 0; $i < $estrelas_inicio ; $i++){ ?>
        						                    <label for="estrela_inicio_um"><i class="fas fa-star"></i></label>
        						                <? } ?>
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Término do serviço?</td>
        						            
        						            <td>
        						                <?php
        						                    $estrelas_termino = $row['termino_servico'];
        						                    for($i = 0; $i < $estrelas_termino ; $i++){ ?>
        						                    <label for="estrela_termino_um"><i class="fas fa-star"></i></label>
        						                <? } ?>
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Atendimento da recepção</td>
        						            
        						            <td>
        						                <?php
        						                    $atendimento_recepcao = $row['atendimento_recepcao'];
        						                    for($i = 0; $i < $atendimento_recepcao ; $i++){ ?>
        						                    <label for="estrela_recepcao_um"><i class="fas fa-star"></i></label>
        						                <? } ?>
        						            </td>
        						            
        						        </tr>
        						        <tr>
        						            <td>Atendimento da profissional</td>
        						            <td>
        						                <?php
        						                    $atendimento_profissional = $row['atendimento_profissional'];
        						                    for($i = 0; $i < $atendimento_profissional ; $i++){ ?>
        						                    <label for="estrela_profissional_um"><i class="fas fa-star"></i></label>
        						                <? } ?>
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Limpeza</td>
        						            <td>
        						                <?php
        						                    $limpeza = $row['limpeza'];
        						                    for($i = 0; $i < $limpeza ; $i++){ ?>
        						                    <label for="estrela_limpeza_um"><i class="fas fa-star"></i></label>
        						                <? } ?>
                                            </td>
        						        </tr>
        						        <tr>
        						            <td>Disponibilidade de agenda</td>
        						            <td>
        						                <?php
        						                    $disponibilidade_agenda = $row['disponibilidade_agenda'];
        						                    for($i = 0; $i < $disponibilidade_agenda ; $i++){ ?>
        						                    <label for="estrela_agenda_um"><i class="fas fa-star"></i></label>
        						                <? } ?>
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Localização</td>
        						            <td>
        						                <?php 
        						                    $localizacao = $row['localizacao'];
        						                    for($i = 0; $i < $localizacao ; $i++){ ?>
        						                    <label for="estrela_localizacao_um"><i class="fas fa-star"></i></label>
        						                <? } ?>
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Banheiro</td>
        						            <td>
        						                <?php
        						                    $banheiro = $row['banheiro'];
        						                    for($i = 0; $i < $banheiro ; $i++){ ?>
        						                    <label for="estrela_banheiro_um"><i class="fas fa-star"></i></label>
        						                <? } ?>
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Preço</td>
        						            <td>
        						                <?php
        						                    $preco = $row['preco'];
        						                    for($i = 0; $i < $preco ; $i++){ ?>
        						                    <label for="estrela_preco_um"><i class="fas fa-star"></i></label>
        						                <? } ?>
        						            </td>
        						        </tr>
        						    </tbody>
        						</table>
        					</div>
        				</div>	
                    </div>
                </div>
        		<div class="panel">
        		  	<div class="panel-heading text-center">Observação, pontos de melhoria ou algo que deseje falar sobre nossos serviços</div>
        
        		  	<div class="panel-body text-center">
        		    	<h3><?php echo $row['observacoes']?></h3>
        		  	</div>
        		</div>
        	
        	</div>
        </div>
		        <?php } ?> 

		</div>
	</div>
</body>

</html>