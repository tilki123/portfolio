<?php
	require "../inc/db.inc.php";
	require "../inc/lib.inc.php";
	$mess = selectAllMess();
	if (!is_array($mess)){
		echo 'Произошла ошипка при выводе письма';
		exit;
	}
	if (!$mess){
	echo 'Писем нету';
	exit;
}
	foreach ($mess as $item){
?>
<?php
 $id = $item['id'];
 deleteMess();
?>
<p><b>Тема письма: </b> <?= $item['title']?></p>
<p><b>Емаил: </b><?= $item['email']?></p>
<p><b>Время отправки письма: </b><?= date('d-m-Y H:i:s', $item['data'])?></p>
<p><b>Письмо: </b><?= $item['content']?></p>

<?
echo <<<HTML
<p align="right"><a href="{$_SERVER['REQUEST_URI']} &del=$id">Удалить</a></p>
HTML;
echo '<hr noshade size="5px">';
}
?>
