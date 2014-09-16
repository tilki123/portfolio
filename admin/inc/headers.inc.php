<?php
	$title = 'Супер-мега сайт';
	$headers = 'Добро пожаловать на наш сайт';
	$id = strtolower(strip_tags(trim($_GET['id'])));
	
	// Инициализация заголовков страницы
	switch ($id){
		case 'message':
			$title = 'Новые письма';
			$headers = 'Новые письма';
		break;

		case 'news':
			$title = 'Редактирование новостей';
			$headers = 'Добавление новостей';
		break;
	}
?>