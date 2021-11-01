<?php
session_start();

if ($_SESSION['email']) {?>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php include('../header.php');?>
	<h1 class="textCenter">Administrador</h1>
	<br>
	<div class="centralizar">
		<a class="botao centralizar" type="button" href="../../controller/index.php?pagina=cadastro">Cadastrar</a>		
	</div>
	<br>
	<!-- <div class="centralizar">
		<a class="botao centralizar" type="button" href="../../controller/index.php?pagina=logout">Sair</a>		
	</div> -->
</body>
</html>

<?php
}else{
	header('Location:../../controller/index.php?pagina=logar');
	exit();
}
?>
