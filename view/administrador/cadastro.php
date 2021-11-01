<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="../../controller/cadastrar.php" method="post">
		<label>Nome</label>
		<br>
		<input type="text" name="nome" placeholder="Nome" required>
		<br>
		<label>Email</label>
		<br>
		<input type="email" name="email" placeholder="Email" required>
		<br>
		<label>Senha</label>
		<br>
		<input type="password" name="senha" placeholder="Senha" required>
		<br>
		<label>Tipo do usuario</label>
		<select name="tipousuario" id="tipousuario" required>
		  	<option value="n" selected>Usuario</option>
		  	<option value="s">Administrador</option>
		</select>
		<input type="submit" name="Enviar">
		<br>
		<br>
		<a href="../../controller/index.php?pagina=homeadm">Voltar</a>
	</form>
</body>
</html>