<?php
session_start();
	include_once "users.php";
		
	$login    = $_POST['login'];
	$password = $_POST['pass'];	
	$arr_length = count($users);
		
	for($i = 0 ; $i <= $arr_length;$i++ ){	
		if($login == $users[$i]["login"] and $password == $users[$i]["password"]){
			$prover = true;
			$mass = [
				"name"     => $users[$i]["name"],
				"surname"  => $users[$i]["surname"],
				"login"    => $users[$i]["login"],
				"password" => $users[$i]["password"],
				"lang"     => $users[$i]["lang"],
				"rol"      => $users[$i]["rol"]
			];
		}
	}
			
	$name = $mass["name"];
	$rol = $mass['rol'];
			
	if($prover == true){
		$_SESSION["login"] = $login;
		$_SESSION["name"] = $name;
		$_SESSION["rol"] = $rol;
					
					
		if($rol == "admin"){
			header("Location: admin.php");
		}
		if($rol == "client"){
			header("Location: client.php");
		}
		if($rol == "manager"){
			header("Location: manager.php");
		}	
		
	}else{
		echo "Введите корректные данные!";
	}
			
	
		