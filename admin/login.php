<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin | Kyçu</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/login.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/auth.js"></script>
</head>
<body id="admin" style="background: url('assets/images/tir.jpg')">
	<center class="login-page">
		<h2>Kyçuni ne portalin e administrimit</h2>
		<div class="form">
			<center>
				<input name="username" type="text" placeholder="Username" class="username">
				<input name="password" type="password" placeholder="Password" class="password">
				<button type="submit" class="btn btn-info login">Login</button>
				<label for="help" style="color: #cacaca; padding-top: 2%;">Kontaktoni me adminin per <a href="">me teper</a></label>
			</center>
		</div>
	</center>
</body>
</html>