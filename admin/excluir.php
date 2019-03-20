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

    echo  $arquivo = $_GET['id'];
    echo  $pagina = $_GET['pagina'];
   
    try {
        
        $conn = new PDO("mysql:host=localhost;dbname=tulyab_admin","tulyab_desenvolvimento","403apartamento");
        
        if($pagina === 'galeria'){
            $sql = "DELETE FROM galeria WHERE imagem = '$arquivo'";
            
            $conn->exec($sql);
            
           header('Location: galeria.php');
        }  
        
        if($pagina === 'portfolio'){
             $sql = "DELETE FROM portfolio WHERE imagem = '$arquivo'";
            
            $conn->exec($sql);
            
           header('Location: portfolio.php');
        }
        
    }
	catch(PDOException $e){
			echo $e;
	}



        
?>