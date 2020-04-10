<?php
session_start();
include_once "lang.php";
if(isset($_SESSION["login"])){
		if(isset($_POST['logout'])){	
			unset($_SESSION['login']);
			header("Location: index.php");
		}
		echo $langTran[$lang]['hello']." ".$langTran[$lang]['manager']." ".$_SESSION['name'];
}else{
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>		
		
		
    <form method="post"  action="" style="text-align:center">
		<select name="lang">
			<option value="ru">ru</option>
			<option value="uk">uk</option>
			<option value="en">en</option>
			<option value="it">it</option>
		</select>
		<input type="submit">
		<input type="submit" name="logout" value ="Выйти">
	</form>
</body>
</html>