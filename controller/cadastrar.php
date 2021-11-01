<?php 
session_start();
include('../model/banco.php');

if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['tipousuario'])){
	header('Location:index.php/?pagina=erroCadastroDados');
	exit();
}
	
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$tipousuario = mysqli_real_escape_string($conexao, trim($_POST['tipousuario']));

$querySelect = "SELECT * FROM usuario WHERE email = '".$email."'";
$selctResult = mysqli_query($conexao, $querySelect);

if (mysqli_num_rows($selctResult) == 1) {
	//já exite usuario
	header('Location:index.php?pagina=erroCadastroExiteUsuario');
}else{
	//não existe o usuario
	$query = "INSERT INTO usuario (usuario, email, senha, adm) VALUES ('$nome', '$email', '$senha', '$tipousuario');";
	
	$result = mysqli_query($conexao, $query);

	if($result == 1){
		header('Location:index.php?pagina=cadastro');
		exit();
	}else{
		echo "0";
		exit();
	}
}
//

// 

// // $teste = mysqli_num_rows($result);

// print_r($query);
// // exit();
// if(mysqli_num_rows($result) == 1){
// 	echo "deu certo";
// 	exit();
// }else{
// 	echo "deu errado";
// 	exit();
// }

?>