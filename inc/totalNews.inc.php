			<div class="zagolovok" style="padding-bottom:12px;">Последние новости</div>
	<?php
		$news = selectNews();
	if (!is_array($news)){
		echo 'Произошла ошипка при выводе новостей';
		exit;
	}
	if (!$news){
	echo 'Новостей нету';
	exit;
}
	foreach ($news as $item){
	?>

	<h3 class="visitNews"><a href="index.php?id=viewNews&new=<?= $item['id']?>"> <?= $item['title']?> </a></h3>
	<h5 align="right" style="color:#009900;">Опубликовано: <?= date('d-m-Y H:i:s', $item['date'])?></h5>
	<p align="justify"><?= $item['header']?></p>
		<hr>
		<br>
	<?
	}
	?>
	
	