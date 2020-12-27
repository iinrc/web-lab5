<?php
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

	if(mb_strlen($email) < 1 || mb_strlen($email) > 90) 
		{
			echo "Недопустимая длина логина";
			exit();
		} 
	else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 30) 
		{
			echo "Недопустимая длина пароля";
			exit();
		} 
	else if(mb_strlen($name) < 2 || mb_strlen($name) > 25) 
		{
			echo "Недопустимая длина пароля";
			exit();
		}

	$pass = md5($pass."1s2d5");

	$mysql = new mysqli('localhost', 'root', '', 'register');
	$mysql->query("INSERT INTO `users` (`email`, `pass`, `name`) VALUES('$email', '$pass', '$name')");
	$mysql->close();
	
	header('Location: /server/');
?>
