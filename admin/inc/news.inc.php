	<?
	require "../inc/lib.inc.php";
	require "../inc/db.inc.php";
	
		$news = clearStr($_POST['news']);
		$title = clearStr($_POST['title']);
		$text = $_POST['text'];
		$header = clearStr($_POST['header']);
		$date = time();
		$image = $_FILES['image']['name'];
		
			if (isset($_POST['sent_request'])){
			saveNews($news, $title, $header, $image, $text, $date);
			uploadFile($_FILES['image']);
			 
			}
	
?>


<form enctype="multipart/form-data" method="post">
<table cellspacing="5" cellpadding="3"> 
	<tr>
		<td align="right">Выберите новость:</td>   
		<td><select name="news">
			<option value="politica"> Политика</option>
			<option value="sport"> Спорт</option>
			<option value="avto"> Авто</option>
			<option value="hiTech"> Hi-Tech</option>
		</select></td>
	</tr>
	
	<tr>
		<td align="right">Введите тему новости:</td> 
		<td><input type="text" name="title"></td>
	</tr>
	
		<tr>
		<td align="right">Введите заголовок новости:</td> 
		<td><textarea name="header"></textarea></td>
		</tr>
	
	<tr>
		<td align="right">Выберите фото:</td>
		<td><input type="file" name="image"></td>
	</tr>

	<tr>
		<td align="right">Введите содержание:</td>
		<td><textarea name="text" cols="50" rows="10"></textarea></td>
	</tr>
	<td></td>
	<td><p><input type="submit" value="Отправить" name="sent_request"></p></td>
	</table>
</form>
