<?php
	require "lib.inc.php";
	require "db.inc.php";
	
	$subject = clearStr($_POST['subject']);
	$email = clearStr($_POST['email']);
	$body = clearStr($_POST['body']);
	$time = time();
		if(!addNewNews($subject, $email, $body, $time)){
		echo 'Произошла ошибка при добавлении новости';
	}else{
		header('Location: '.$_SERVER['SCRIPT_NAME'].'?id=contact');
		//echo '<p>Если хотите отправить ещё одно письмо то нажмите <a href="index.php?id=contact">сюда</a></p>';
	exit; 
	}
?>