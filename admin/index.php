<?php
	include 'inc/headers.inc.php';
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<html>
<head>
	<title> <?= $title?> </title>
	<meta http-equiv="content-type"	content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../inc/style.css" />
</head>
<body>
<div id="conteiner">

<!-- Навигация по сайту -->
	<div id="header">
		<div id="logo"><a href="index.php">
			<img src="../imgSite/logo.png	">
		</a></div>
		<div id="navigatia">
			<ul>
				<li><a href="index.php?id=message">ПИСЬМА</a></li>
				<li><a href="index.php?id=news">НОВОСТИ</a></li>
			</ul>
		</div>
	</div>
<!-- Область основного контента -->
	<div id="fonCont">
			<div id="content">
				<p class="zagolovok"><?= $headers?></p>
					<?php
						include 'inc/routing.inc.php';
					?>
			</div>

	</div>
</div>

	<!-- Нижняя часть страницы -->
<div id="fonFooter">
	<div  id="footer">
	<?php
		define('COPYRIGHT', 'Супер-мега сайт');
		$year = strftime('%Y');
		
	?>
		<p>&copy; <?= COPYRIGHT?>, <?= $year?></p>
	</div>
</div>
</body>
</html>