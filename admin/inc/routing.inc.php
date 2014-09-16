<?php
	switch ($id){
		case 'message': include 'inc/message.inc.php'; break;
		case 'news': include 'inc/news.inc.php'; break;
		default: include 'inc/index.inc.php';
	}
?>