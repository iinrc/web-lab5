<?php
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$pass = md5($pass."1s2d5");

	$mysql = new mysqli('localhost', 'root', '', 'register');
	
	$proverka = $mysql->query("SELECT  * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
	
	$user = $proverka->fetch_assoc();
	
	if(count($user) == 0)
	{	
		echo " Пользователь не найден";
		header('Location: /server/error.html');
		exit();
	}
	
	setcookie('user', $user['name'], time() + 3600, "/");
	setcookie('email', $user['email'], time() + 3600, "/");
	$mysql->close();
	
	header('Location: /server/account.php');
?>
