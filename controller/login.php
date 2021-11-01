<?php
session_start();
include('../model/banco.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
	header('Location:index.php?pagina=logar');
	exit();
}
	
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$query = "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."'";
$result = mysqli_query($conexao, $query);

if (mysqli_num_rows($result) == 1) {
	$_SESSION['email'] = $email;
	$_SESSION['nome'] = $nome;
	if($meu = mysqli_fetch_assoc($result)){
		// tem resultado de administrador sim ou não
		if($_SESSION['email']){
			if($meu['adm'] == 's'){
				// se resultado administrador for sim, redireciona para area do administrador
				header('Location:index.php?pagina=homeadm');
				exit();
			}else{
				// se resultado administrador for não, redireciona para area do usuario
				header('Location:index.php?pagina=homeuser');
				exit();
			}
		}else{
			header('Location:index.php?pagina=login');
		}
	}else{
		session_destroy();
		header('Location:index.php?pagina=logar');
		exit();
	}
}else{
	header('Location:index.php?pagina=logar');
	exit();
}
	
?>