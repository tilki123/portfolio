<?	
	require "db.inc.php";
	require "lib.inc.php";

	

	?>
	<div id="contNews">
	<div class="DrawMenu">
	<div class="zagolovok">Категории</div>
		<ul>
			<li><a href="index.php?id=politica">Политика</a></li>
			<li><a href="index.php?id=sport">Спорт</a></li>
			<li><a href="index.php?id=avto">Авто</a></li>
			<li><a href="index.php?id=hi-tech">Hi-Tech</a></li>
		</ul>
	</div>
	
	<div class="news">

	<?php
	
	switch($id){
		case 'news': include 'inc/totalNews.inc.php'; break;
		case 'politica': include 'inc/politica.inc.php'; break;
		case 'sport': include 'inc/politica.inc.php'; break;
		case 'avto': include 'inc/politica.inc.php'; break;
		case 'hi-tech': include 'inc/politica.inc.php'; break;
		default: echo 'неправильный адрес';
	}
	
	?>
	</div>
	</div>
	