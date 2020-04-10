<?php
session_start();
	include_once "code.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign In</title>
</head>
<body>		
			<h1 style="text-align:center;">
				Авторизация 
			</h1>
		
    <form method="post"  action="" style="text-align:center">
		<p>
			<label>Login</label><br>
			<input name="login"> <br>
			<label>Password</label><br>
			<input type="password" name="pass"><br>
		</p>
	   <p><input type="submit" value="Отправить" method="post"></p>
	</form>
</body>
</html>
