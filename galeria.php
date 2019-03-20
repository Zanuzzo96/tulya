<?php 
	try{
    	$conn = new PDO("mysql:host=localhost;dbname=tulyab_admin","tulyab_desenvolvimento","403apartamento");
    	
    	$select = $conn->query("SELECT mensagem,imagem FROM galeria ");
    	
    }
	catch(PDOException $e){
			echo $e;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Galeria - Túlya B</title>
	<link rel="shortcut icon" href="assets/img/favicon.png" /> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">

</head>

<body id="galeria">

	<a href="index.html"><span class="glyphicon glyphicon-arrow-left link-voltar-index" aria-hidden="true"></span></a>
	
	<div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
	    <h1 class="text-center galeria-h1">GALERIA</h1>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

		<?php $result = $select->fetchAll(); foreach($result as $row){?>   
			<div class="col-xs-12 col-sm-12 col-md-4 box-galeria">
				<img src="<?php  echo $row['imagem'];?>" class="img-responsive">
				<h4><?php  echo $row['mensagem'];?></h4>
			</div>
		<?php } ?>
	</div>

</body>

</html>