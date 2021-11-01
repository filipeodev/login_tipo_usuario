<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<?php include('header-logar.php')?>
		<div class="form">
			<form action="../controller/login.php" method="post">
				<label>Email</label>
				<br>
				<input type="text" name="email" placeholder="Email">
				<br>
				<br>
				<label>Senha</label>
				<br>
				<input type="password" name="senha" placeholder="Senha">
				<br>
				<br>
				<button class="btn" type="submit" name="Enviar">Entrar</button>
			</form>
		</div>
	</div>
</body>
</html>
