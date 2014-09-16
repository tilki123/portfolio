<?php
	require "db.inc.php";
	require "lib.inc.php";
	
		$new = $_GET['new'];
		$view = viewNews($new);
	if (!is_array($view)){
		echo 'Произошла ошипка при выводе новостей';
		exit;
	}
	if (!$view){
	echo 'Новостей нету';
	exit;
}
	?>

	<h3 class="visitNews"> <?= $view['title']?> </h3>
	<h5 align="right" style="color:#009900;">Опубликовано: <?= date('d-m-Y H:i:s', $view['date'])?></h5>
	<p align="justify"><?= $view['header']?></p>
	<img width="500px" src="../userImages/<?= $view['image']?>">
	<p><?= $view['text']?></p>
		<br>