<?php
	$title = 'Супер-мега сайт';
	$headers = '';
	$id = strtolower(strip_tags(trim($_GET['id'])));
	
	// Инициализация заголовков страницы
	switch ($id){
		case 'contact':
			$title = 'Контакты';
			$headers = 'Обратная связь';
		break;

		case 'abaut':
			$title = 'О Нас';
			$headers = 'О нашем сайте';
		break;

		case 'info':
			$title = 'Информация';
			$headers = 'Информация';
		break;

		case 'news':
			$title = 'Новости';
			$headers = '';
		break;
		
		case 'add2contact':
			$title = 'Письмо';
			$headers = 'Письмо отправлено успешно';
		break;
		
		case 'politica':
			$title = 'Политика';
			$headers = '';
		break;
		
		case 'sport':
			$title = 'Спорт';
			$headers = '';
		break;
		
		case 'avto':
			$title = 'Авто';
			$headers = '';
		break;
		
		case 'hi-tech':
			$title = 'Hi-tech';
			$headers = '';
		break;
		
		case 'viewnews':
			$title = 'Подробно';
			$headers = '';
		break;
	}
?>