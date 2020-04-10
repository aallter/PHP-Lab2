<?php
session_start();

$lang = $_POST['lang'];
$_SESSION['lang'] = $lang;
	
	$langTran = [
		'ru' =>['hello'=>'Привет','admin'=>'админ','client'=>'клиент','manager'=>'менеджер'],
		'en' =>['hello'=>'Hello','admin'=>'admin','client'=>'client','manager'=>'manager'],
		'uk' =>['hello'=>'Привіт','admin'=>'адмін','client'=>'кліент','manager'=>'менеджер'],
		'it' =>['hello'=>'Сiao','admin'=>'admin','client'=>'il cliente','manager'=>'direttore'],
	];
	if($lang==""){
			$lang="ru";
	}
?>