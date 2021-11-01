<?php

if(!$_SESSION['email']){
	header('Location:index.php?pagina=logar');
	exit();
}else{
	if($meu['adm'] == 's'){
		header('Location:index.php?pagina=homeadm');
		exit();
	}else{
		header('Location:index.php?pagina=homeuser');
		exit();
	}
}
?>