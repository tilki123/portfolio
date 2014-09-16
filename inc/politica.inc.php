	<?	
	switch($id){
		case 'politica': echo '<div class="zagolovok" style="padding-bottom:12px;">Политика</div>'; break;
		case 'sport': echo '<div class="zagolovok" style="padding-bottom:12px;">Спорт</div>';break;
		case 'avto': echo '<div class="zagolovok" style="padding-bottom:12px;">Авто</div>';break;
		case 'hi-tech': echo '<div class="zagolovok" style="padding-bottom:12px;">Hi-tech</div>';break;
	}
		$pol = selectPol();
	if (!is_array($pol)){
		echo 'Произошла ошипка при выводе новостей';
		exit;
	}
	if (!$pol){
	echo 'Новостей нету';
	exit;
}
	
	foreach ($pol as $item){
	?>
	<h3 class="visitNews"><a href="index.php?id=viewNews&new=<?= $item['id']?>"> <?= $item['title']?> </a></h3>
	<h5 align="right" style="color:#009900;">Опубликовано: <?= date('d-m-Y H:i:s', $item['date'])?></h5>
	<p align="justify"><?= $item['header']?></p>
		<hr>
		<br>
	<?
	}
	?>