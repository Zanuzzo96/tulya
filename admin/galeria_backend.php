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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload de arquivos</title>
</head>

<body>
<?php
// verifica se foi enviado um arquivo 
if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
{

	$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
	$nome = $_FILES['arquivo']['name'];
	

	// Pega a extensao
	$extensao = strrchr($nome, '.');

	// Converte a extensao para mimusculo
	$extensao = strtolower($extensao);

	// Somente imagens, .jpg;.jpeg;.gif;.png
	// Aqui eu enfilero as extesões permitidas e separo por ';'
	// Isso server apenas para eu poder pesquisar dentro desta String
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
	{
		// Cria um nome único para esta imagem
		// Evita que duplique as imagens no servidor.
		$novoNome = md5(microtime()) . '.' . $extensao;
		
		// Concatena a pasta com o nome
		$destino = '../assets/img/galeria/' . $novoNome; 
		
		// tenta mover o arquivo para o destino
		if( @move_uploaded_file( $arquivo_tmp, $destino  ))
		{
			header("admin.php");
		}
		else
			echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
	}
	else
		echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
}
else
{
	echo "Você não enviou nenhum arquivo!";
}

//inserir no banco os dados
	try{
    	$conn = new PDO("mysql:host=localhost;dbname=tulyab_admin","tulyab_desenvolvimento","403apartamento");
    }
	catch(PDOException $e){
			echo $e;
	}

	$stmt = $conn->prepare("INSERT INTO galeria(mensagem,imagem) 
		VALUES(:MENSAGEM,:IMAGEM)");


	$mensagem = $_POST['mensagem'];
	
	$stmt->bindParam(":MENSAGEM",$mensagem);
	$stmt->bindParam(":IMAGEM",$destino);

	$stmt->execute();
	
	 header("location:admin.php");
?>
</body>
</html>