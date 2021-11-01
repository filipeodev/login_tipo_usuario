<?php
if(empty($_SESSION['email'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}else{
		$pagina = 'login';
	}
}else{
	$pagina = 'login';
}

switch($pagina){
	case 'erros':
		include('');
		break;
	case 'login':
		header('Location:login.php');
		break;
	case 'logar':
		header('Location:../view/logar.php');
		break;
	case 'cadastro':
		header('Location:../view/administrador/cadastro.php');
		break;
	case 'homeadm':
		header('Location:../view/administrador/homeadm.php');
		break;
	case 'homeuser':
		header('Location:../view/usuario/homeuser.php');
		break;
	case 'logout':
		header('Location:logout.php');
		break;
	case 'cadastrar':
		header('Location:cadastrar.php');
		break;
	case 'verifica_login':
		header('Location:verifica_login.php');
		break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	// case 'logar':
	// 	header('Location:../view/logar.php');
	// 	break;
	default:
		header('Location:logout.php');
		break;
}
?>
