<?php
	try{
    	$conn = new PDO("mysql:host=localhost;dbname=tulyab_admin","tulyab_desenvolvimento","403apartamento");
    	
    	if(isset($_POST['enviar'])){
    	    
    	    if(!empty($_POST['estrela']) && !empty($_POST['estrela1']) && !empty($_POST['estrela3'])  && !empty($_POST['estrela4']) && !empty($_POST['estrela5']) && !empty($_POST['estrela6']) && !empty($_POST['estrela7']) && !empty($_POST['estrela8']) && !empty($_POST['estrela9'])){
    	        
    	        $nome = $_POST['nome'];
        	    $procedimento = $_POST['procedimento'];
    	        
    	        $estrela = $_POST['estrela']; // Inicio do serviço
    	        $estrela1 = $_POST['estrela1']; //termino do servico
    	        $estrela3 = $_POST['estrela3']; //atendimento recepção
    	        $estrela4 = $_POST['estrela4']; //atendimento profissional
    	        $estrela5 = $_POST['estrela5']; //limpeza
    	        $estrela6 = $_POST['estrela6']; //disponibilidade agenda
    	        $estrela7 = $_POST['estrela7']; //localização
    	        $estrela8 = $_POST['estrela8']; //banheiro
    	        $estrela9 = $_POST['estrela9']; //preço
    	       
                $observacoes = $_POST['observacoes'];
                
                $data = date("Y-m-d");
                
                	$stmt = $conn->prepare("INSERT INTO pesquisa(nome,procedimento,inicio_servico,termino_servico,atendimento_recepcao,atendimento_profissional,limpeza,disponibilidade_agenda,localizacao,banheiro,preco,observacoes,data) 
                	VALUES(:NOME,:PROCEDIMENTO,:INICIO_SERVICO,:TERMINO_SERVICO,:ATENDIMENTO_RECEPCAO,:ATENDIMENTO_PROFISSIONAL,:LIMPEZA,:DISPONIBILIDADE_AGENDA,:LOCALIZACAO,:BANHEIRO,:PRECO,:OBSERVACOES,:DATA)");
    	            $stmt->bindParam(":NOME",$nome);
    	            $stmt->bindParam(":PROCEDIMENTO",$procedimento);
    	            $stmt->bindParam(":INICIO_SERVICO",$estrela);
    	            $stmt->bindParam(":TERMINO_SERVICO",$estrela1);
    	            $stmt->bindParam(":ATENDIMENTO_RECEPCAO",$estrela3);
    	            $stmt->bindParam(":ATENDIMENTO_PROFISSIONAL",$estrela4);
    	            $stmt->bindParam(":LIMPEZA",$estrela5);
    	            $stmt->bindParam(":DISPONIBILIDADE_AGENDA",$estrela6);
    	            $stmt->bindParam(":LOCALIZACAO",$estrela7);
    	            $stmt->bindParam(":BANHEIRO",$estrela8);
    	            $stmt->bindParam(":PRECO",$estrela9);
    	            $stmt->bindParam(":OBSERVACOES",$observacoes);
                    $stmt->bindParam(":DATA",$data);
                    
    	            $stmt->execute();
    	
    	            //header("location:index.html");
    	        
    	    }else{
    	        
        	    echo '<h3 class="text-right" style="color:red">Você precisa responder todas as perguntas da pesquisa de satisfação</h3>';
        	    header("Refresh:3");
    	    
    	    }
    	    
    	    
    	}
    	
    }
	catch(PDOException $e){
			echo $e;
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
       	<title>Pesquisa de satisfação</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="assets/img/favicon.png" />
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
    	
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">


    
    	<style type="text/css">
    	    
    	    body{
    	        background:#373435;
    	        color:#dbae46;
    	    }
    	    
    	    .pesquisa-h1{
    	        font-size:4em;  
    	        color:#dbae46;
    	        font-weight:bolder;
    	        margin-top:px;
    	    }
    	    
    	</style>
	     
    </head>
    <body id="pesquisa">
        
        <div class="container">
           	<a href="index.html"><span class="glyphicon glyphicon-arrow-left link-voltar-index" aria-hidden="true"></span></a>
    
    		<div class="col-md-12">
    			<h1 class="text-center pesquisa-h1">PESQUISA DE SATISFAÇÃO</h1>
    			<h4 class="text-center">Sua opinião é muito importante para nós, sua identidade não é necessária ser revelada</h4>
    		</div>
		</div>
		<br><br>
		<div class="container">
        	<div class="row">
        	    
        	<form method="POST" encrypt="multipart/form-data">  
        		<div class="panel">
        		  	<div class="panel-heading text-center">Identificação (Não é obrigatório)</div>
        
        		  	<div class="panel-body">
        		  	    <div class="col-sm-12 col-md-6">
        		    	    <input type="text" class="form-control" name="nome" placeholder="Nome completo">
        		    	</div>
        		    	
        		    	<div class="col-sm-12 col-md-6">
        		    	    <input type="text" class="form-control" name="procedimento" placeholder="Procedimento realizado">
        		    	</div>
        		  	</div>
        		</div>
        
        		<div class="panel">
        		  	<div class="panel-heading text-center">Pesquisa de satisfação (Obrigatório)</div>
        
        		  	<div class="panel-body">
        		  	    <div class="col-md-12 text-center">
        		  	        <span><big>Forma de avaliação:</big></span>
        		  	        <span><i class="fas fa-star"></i><big> Ruim</big></span>
        		  	        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><big> Bom</big></span>
        		  	        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><big> Excelente</big></span>
        		  	        <hr>
        		  	    </div>
        		    	<div class="">
        					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        						<table class="table">
        						    <tbody>
        						        <tr>
        						            <td>Inicio do serviço?</td>
        						            <td class="estrelas">
        						                <input type="radio" id="vazio" name="estrela" value="" checked>
        						                
        						                <label for="estrela_inicio_um"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_inicio_um" name="estrela" value="1">
        						                
        						                <label for="estrela_inicio_dois"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_inicio_dois" name="estrela" value="2">
        						                
        						                <label for="estrela_inicio_tres"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_inicio_tres" name="estrela" value="3">
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Término do serviço?</td>
        						            
        						            <td class="estrelas1">
        						                <input type="radio" id="vazio" name="estrela1" value="" checked>
        						                
        						                <label for="estrela_termino_um"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_termino_um" name="estrela1" value="1">
        						                
        						                <label for="estrela_termino_dois"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_termino_dois" name="estrela1" value="2">
        						                
        						                <label for="estrela_termino_tres"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_termino_tres" name="estrela1" value="3">
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Atendimento da recepção</td>
        						            
        						            <td class="estrelas3">
        						                <input type="radio" id="vazio" name="estrela3" value="" checked>
        						                
        						                <label for="estrela_recepcao_um"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_recepcao_um" name="estrela3" value="1">
        						                
        						                <label for="estrela_recepcao_dois"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_recepcao_dois" name="estrela3" value="2">
        						                
        						                <label for="estrela_recepcao_tres"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_recepcao_tres" name="estrela3" value="3">
        						            </td>
        						            
        						        </tr>
        						        <tr>
        						            <td>Atendimento da profissional</td>
        						            <td class="estrelas4">
        						                <input type="radio" id="vazio" name="estrela4" value="" checked>
        						                
        						                <label for="estrela_profissional_um"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_profissional_um" name="estrela4" value="1">
        						                
        						                <label for="estrela_profissional_dois"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_profissional_dois" name="estrela4" value="2">
        						                
        						                <label for="estrela_profissional_tres"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_profissional_tres" name="estrela4" value="3">
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Limpeza</td>
        						            <td class="estrelas5">
        						                <input type="radio" id="vazio" name="estrela5" value="" checked>
        						                
        						                <label for="estrela_limpeza_um"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_limpeza_um" name="estrela5" value="1">
        						                
        						                <label for="estrela_limpeza_dois"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_limpeza_dois" name="estrela5" value="2">
        						                
        						                <label for="estrela_limpeza_tres"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_limpeza_tres" name="estrela5" value="3">
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Disponibilidade de agenda</td>
        						            <td class="estrelas6">
        						                <input type="radio" id="vazio" name="estrela6" value="" checked>
        						                
        						                <label for="estrela_agenda_um"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_agenda_um" name="estrela6" value="1">
        						                
        						                <label for="estrela_agenda_dois"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_agenda_dois" name="estrela6" value="2">
        						                
        						                <label for="estrela_agenda_tres"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_agenda_tres" name="estrela6" value="3">
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Localização</td>
        						            <td class="estrelas7">
        						                <input type="radio" id="vazio" name="estrela7" value="" checked>
        						                
        						                <label for="estrela_localizacao_um"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_localizacao_um" name="estrela7" value="1">
        						                
        						                <label for="estrela_localizacao_dois"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_localizacao_dois" name="estrela7" value="2">
        						                
        						                <label for="estrela_localizacao_tres"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_localizacao_tres" name="estrela7" value="3">
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Banheiro</td>
        						            <td class="estrelas8">
        						                <input type="radio" id="vazio" name="estrela8" value="" checked>
        						                
        						                <label for="estrela_banheiro_um"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_banheiro_um" name="estrela8" value="1">
        						                
        						                <label for="estrela_banheiro_dois"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_banheiro_dois" name="estrela8" value="2">
        						                
        						                <label for="estrela_banheiro_tres"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_banheiro_tres" name="estrela8" value="3">
        						            </td>
        						        </tr>
        						        <tr>
        						            <td>Preço</td>
        						            <td class="estrelas9">
        						                <input type="radio" id="vazio" name="estrela9" value="" checked>
        						                
        						                <label for="estrela_preco_um"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_preco_um" name="estrela9" value="1">
        						                
        						                <label for="estrela_preco_dois"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_preco_dois" name="estrela9" value="2">
        						                
        						                <label for="estrela_preco_tres"><i class="fas fa-star"></i></label>
        						                <input type="radio" id="estrela_preco_tres" name="estrela9" value="3">
        						            </td>
        						        </tr>
        						    </tbody>
        						</table>
        					</div>
        				</div>	
        		  	</div>
        		</div>
        
        		<div class="panel">
        		  	<div class="panel-heading text-center">Observação, pontos de melhoria ou algo que deseje falar sobre nossos serviços (Não é obrigatório)</div>
        
        		  	<div class="panel-body">
        		    	<textarea class="form-control" name="observacoes" rows="5" id="comment"></textarea>
        		  	</div>
        		</div>
        		
        		<input type="submit" class="btn btn-lg col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4" name="enviar" value="Enviar pesquisa">
        		
        	</form>	
        	</div>
        </div>
        
    </body>
</html>