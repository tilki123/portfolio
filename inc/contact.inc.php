<?
	require "db.inc.php";
	require "lib.inc.php";
?>
<b>Наш адрес:</b> Кагул, Малый Молдавский переулок 21<br>
<b>Телефон для связи: </b> 078877578
<h3>Свяжитесь с нами по следующей форме</h3>
<table cellspacing="5" cellpadding="1">
<form action="index.php?id=add2contact" method="post">
	<tr>
		<td align="right"><label>Тема письма:</label></td>
		<td><input type="text" name="subject"></td>
	</tr>
	<tr>
		<td align="right"><label>Введите email:</label></td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td align="right"><label>Содержание:</label>	</td>
		<td><textarea name="body" cols="50" rows="10"></textarea>	</td>
	</tr>
	<tr>
	<td></td>
<td><p><input type="submit" value="Отправить"></p></td>
</tr>
</form>
</table>