<?php

	try{
    	$conn = new PDO("mysql:host=localhost;dbname=tulyab_admin","tulyab_desenvolvimento","403apartamento");
    	
    	$select1 = $conn->query("SELECT * FROM portfolio WHERE titulo = 'ombreshadow'");
    	
    	$select2 = $conn->query("SELECT * FROM portfolio WHERE titulo = 'ombreline'");
    	
    	$select3 = $conn->query("SELECT * FROM portfolio WHERE titulo = 'microbladingfioafio'");
    	
    	$select4 = $conn->query("SELECT * FROM portfolio WHERE titulo = 'micropigmentacaolabial'");
    	
    	$select5 = $conn->query("SELECT * FROM portfolio WHERE titulo = 'micropigmentacaodeolhos'");
    	
    	$select6 = $conn->query("SELECT * FROM portfolio WHERE titulo = 'camuflagemdeestrias'");

    	
    }
	catch(PDOException $e){
			echo $e;
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Portfólio - Túlya B.</title>
	<link rel="shortcut icon" href="assets/img/favicon.png" /> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsividade-md.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsividade-sm.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsividade-xs.css">
	

</head>
<body id="portfolio">

	<a href="index.html"><span class="glyphicon glyphicon-arrow-left link-voltar-index" aria-hidden="true"></span></a>
			
	    <div class="col-lg-12 col-md-12 col-sm-10 col-xs-12">
	        <h1 class="text-center portfolio-h1">PORTFÓLIO</h1>
	    </div>

	        	
	<div class="container botao-portfolio">
		<button type="button" class="btn btn-default btn-lg col-xs-12 col-sm-12 col-md-3 col-lg-3" data-toggle="modal" data-target="#ombreshadow">
			Ombré shadow
		</button>

		<button type="button" class="btn btn-default btn-lg col-md-3 col-lg-3" data-toggle="modal" data-target="#ombreline">
			Ombré Line
		</button>

		<button type="button" class="btn btn-default btn-lg col-md-3 col-lg-3" data-toggle="modal" data-target="#microbladingfioafio">
			Microblading<br>fio a fio
		</button>

		<button type="button" class="btn btn-default btn-lg col-md-3 col-lg-3" data-toggle="modal" data-target="#micropigmentacaolabial">
			Micropigmentação<br>labial
		</button>

		<button type="button" class="btn btn-default btn-lg col-md-3 col-lg-3" data-toggle="modal" data-target="#micropigmentacaodeolhos">
			Micropigmentação<br>de olhos
		</button>

		<button type="button" class="btn btn-default btn-lg col-md-3 col-lg-3" data-toggle="modal" data-target="#camuflagemdeestrias">
			Camuflagem<br>de estrias
		</button>
		

    </div>

<!------------------------------------------- modal ------------------------------------------------------------>

		<!-- Modal Designer De sobrancelhas-->
		<div class="modal fade" id="ombreshadow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<a aria-label="Close" data-dismiss="modal" aria-label="Close" class="hidden-xs"><span class="glyphicon glyphicon-arrow-left link-voltar-index" aria-hidden="true"></span></a>
		        <h1 class="modal-title" id="myModalLabel">OMBRÉ SHADOW</h1>
		      </div>
		      <div class="modal-body">
    
    		    <div class="col-md-12">
    		        <?php $result1 = $select1->fetchAll(); foreach($result1 as $row1){?>
    	  
    		            <img src="<?php  echo $row1['imagem'];?>" class="imagem-portfolio">
    		            
    		        <?php } ?> 
    		    </div>
    		        
		      </div>
		      <div class="modal-footer">

		        <button type="button" class="btn btn-lg btn-default col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" data-dismiss="modal">Voltar ao portfolio</button>
		      </div>
		    
		    </div>
		  </div>
		</div>
		
<!------------------------------------------- modal ------------------------------------------------------------>

		<div class="modal fade" id="ombreline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<a aria-label="Close" data-dismiss="modal" aria-label="Close" class="hidden-xs"><span class="glyphicon glyphicon-arrow-left link-voltar-index" aria-hidden="true"></span></a>
		        <h1 class="modal-title" id="myModalLabel">OMBRÉ LINE</h1>
		      </div>
		      <div class="modal-body">
    
    		    <div class="col-md-12">
    		        <?php $result2 = $select2->fetchAll(); foreach($result2 as $row2){?>
    	  
    		            <img src="<?php  echo $row2['imagem'];?>" class="imagem-portfolio">
    		            
    		        <?php } ?> 
    		    </div>
    		        
		      </div>
		      <div class="modal-footer">

		        <button type="button" class="btn btn-lg btn-default col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" data-dismiss="modal">Voltar ao portfolio</button>
		      </div>
		    
		    </div>
		  </div>
		</div>

<!------------------------------------------- modal ------------------------------------------------------------>

		<div class="modal fade" id="microbladingfioafio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<a aria-label="Close" data-dismiss="modal" aria-label="Close" class="hidden-xs"><span class="glyphicon glyphicon-arrow-left link-voltar-index" aria-hidden="true"></span></a>
		        <h1 class="modal-title" id="myModalLabel">MICROBLADING FIO A FIO</h1>
		      </div>
		      <div class="modal-body">
    
    		    <div class="col-md-12">
    		        <?php $result3 = $select3->fetchAll(); foreach($result3 as $row3){?>
    	  
    		            <img src="<?php  echo $row3['imagem'];?>" class="imagem-portfolio">
    		            
    		        <?php } ?> 
    		    </div>
    		        
		      </div>
		      <div class="modal-footer">

		        <button type="button" class="btn btn-lg btn-default col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" data-dismiss="modal">Voltar ao portfolio</button>
		      </div>
		    
		    </div>
		  </div>
		</div>

<!------------------------------------------- modal ------------------------------------------------------------>

		<div class="modal fade" id="micropigmentacaolabial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<a aria-label="Close" data-dismiss="modal" aria-label="Close" class="hidden-xs"><span class="glyphicon glyphicon-arrow-left link-voltar-index" aria-hidden="true"></span></a>
		        <h1 class="modal-title" id="myModalLabel">MICROPIGMENTAÇÃO LABIAL</h1>
		      </div>
		      <div class="modal-body">
    
    		    <div class="col-md-12">
    		        <?php $result4 = $select4->fetchAll(); foreach($result4 as $row4){?>
    	  
    		            <img src="<?php  echo $row4['imagem'];?>" class="imagem-portfolio">
    		            
    		        <?php } ?> 
    		    </div>
    		        
		      </div>
		      <div class="modal-footer">

		        <button type="button" class="btn btn-lg btn-default col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" data-dismiss="modal">Voltar ao portfolio</button>
		      </div>
		    
		    </div>
		  </div>
		</div>
		
<!------------------------------------------- modal ------------------------------------------------------------>

		<div class="modal fade" id="micropigmentacaodeolhos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<a aria-label="Close" data-dismiss="modal" aria-label="Close" class="hidden-xs"><span class="glyphicon glyphicon-arrow-left link-voltar-index" aria-hidden="true"></span></a>
		        <h1 class="modal-title" id="myModalLabel">MICROPIGMENTAÇÃO DE OLHOS</h1>
		      </div>
		      <div class="modal-body">
    
    		    <div class="col-md-12">
    		        <?php $result5 = $select5->fetchAll(); foreach($result5 as $row5){?>
    	  
    		            <img src="<?php  echo $row5['imagem'];?>" class="imagem-portfolio">
    		            
    		        <?php } ?> 
    		    </div>
    		        
		      </div>
		      <div class="modal-footer">

		        <button type="button" class="btn btn-lg btn-default col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" data-dismiss="modal">Voltar ao portfolio</button>
		      </div>
		    
		    </div>
		  </div>
		</div>
		
<!------------------------------------------- modal ------------------------------------------------------------>

		<div class="modal fade" id="camuflagemdeestrias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<a aria-label="Close" data-dismiss="modal" aria-label="Close" class="hidden-xs"><span class="glyphicon glyphicon-arrow-left link-voltar-index" aria-hidden="true"></span></a>
		        <h1 class="modal-title" id="myModalLabel">CAMUFLAGEM DE ESTRIAS</h1>
		      </div>
		      <div class="modal-body">
    
    		    <div class="col-md-12">
    		        <?php $result6 = $select6->fetchAll(); foreach($result6 as $row6){?>
    	  
    		            <img src="<?php  echo $row6['imagem'];?>" class="imagem-portfolio">
    		            
    		        <?php } ?> 
    		    </div>
    		        
		      </div>
		      <div class="modal-footer">

		        <button type="button" class="btn btn-lg btn-default col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" data-dismiss="modal">Voltar ao portfolio</button>
		      </div>
		    
		    </div>
		  </div>
		</div>		
		
	<script type="text/javascript">
	$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
		$(this).removeClass("active");
		}
		$(this).addClass("active");

	});

</script>
</body>
</html>