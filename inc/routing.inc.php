<?php
	switch ($id){
		case 'contact': include 'inc/contact.inc.php'; break;
		case 'abaut': include 'inc/abaut.inc.php'; break;
		case 'info': include 'inc/info.inc.php'; break;
		case 'news': include 'inc/news.inc.php'; break;
		case 'sport': include 'inc/news.inc.php'; break;
		case 'avto': include 'inc/news.inc.php'; break;
		case 'hi-tech': include 'inc/news.inc.php'; break;
		case 'politica': include 'inc/news.inc.php'; break;
		case 'viewnews': include 'inc/viewnews.inc.php'; break;
		case 'add2contact': include 'inc/add2contact.inc.php'; break;
		default: include 'inc/index.inc.php';
	}
?>