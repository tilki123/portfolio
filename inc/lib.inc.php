<?php
	function clearInt($data){
		return abs((int)$data);
	}
	
	function clearStr($data){
		global $link;
		return trim(strip_tags($data));
	}
	
	function addNewNews($subject, $email, $body, $time){
		global $link;
		$sql = "INSERT INTO newmess(title, email, content, data)
								VALUES(?, ?, ?, ?)";
		if(!$stmt = mysqli_prepare($link, $sql))
			return false;
		mysqli_stmt_bind_param($stmt, "sssi", $subject, $email, $body, $time);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		return true;
	}
	
	function selectAllMess(){
	global $link;
	$sql = "SELECT id, title, email, content, data FROM newmess ORDER BY id DESC";
	if(!$result = mysqli_query($link, $sql))
		return false;
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
		return $items;
}

	function deleteMess(){
	global $link;
		if (isset($_GET['del'])){
	$del = abs((int)$_GET['del']);
		if ($del){
			$sql = "DELETE FROM newmess WHERE id=$del";
			mysqli_query($link, $sql) or die (mysqli_error($link));
			header('Location: '.$_SERVER['SCRIPT_NAME'].'?id=message');
			exit;
		}
	}
}

function uploadFile($files){
	global $link;
	$id = mysqli_insert_id($link);
		if($files['error']!=0){
			switch($files['error']){
				case 1: echo 'Размер принятого файла превысил максимально допустимый размер'; break;
				case 2: echo 'Размер загружаемого файла превысил значение'; break;
				case 3: echo 'Загружаемый файл был получен только частично'; break;
				case 4: echo 'Файл не был загружен'; break;
				case 6: echo 'Отсутствует временная папка'; break;
				case 7: echo 'Не удалось записать файл на диск'; break;
				case 8: echo 'PHP расширение остановило загруску'; break;
			}
		}
			else{
				if(is_uploaded_file($files['tmp_name'])){
					$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $files['name']));
					$newfilename = $_POST['news'].'_'.$id.'_'.rand(1,100).'.'.$imgext;
					if (move_uploaded_file($files['tmp_name'], "../userImages/".$newfilename)){
						$update = mysqli_query($link, "UPDATE politica SET image='$newfilename' WHERE id = '$id'");
					}
				}
				else 'Неудалось отправить фаил';
			}
}

function saveNews($news, $title, $header, $image, $text, $date){
	global $link;
			$sql = "INSERT INTO politica (categori, title, header, image, text, date)
								VALUES(?, ?, ?, ?, ?, ?)";
		if(!$stmt = mysqli_prepare($link, $sql))
			return false;
		mysqli_stmt_bind_param($stmt, "sssssi", $news, $title, $header, $image, $text, $date);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		return true;
}

	function selectNews(){
	global $link;
		$sql = "SELECT id, categori, title, header, image, text, date FROM politica ORDER BY id DESC LIMIT 5";
			if(!$result = mysqli_query($link, $sql))
				return false;
				$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
				mysqli_free_result($result);
				return $items;
}

	function selectPol(){
	global $link, $id;
	$newNews = array();
	switch($id){
		case 'politica': $newNews ='politica'; break;
		case 'sport': $newNews ='sport'; break;
		case 'avto': $newNews ='avto'; break;
		case 'hi-tech': $newNews ='hiTech'; break;
		default: echo 'Неправильный адрес';
	}
		$sql = "SELECT id, categori, title, header, image, text, date FROM politica WHERE categori='$newNews' ORDER BY id DESC LIMIT 5";
			if(!$result = mysqli_query($link, $sql))
				return false;
				$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
				mysqli_free_result($result);
				return $items;
}

	function viewNews($new){
			global $link;
		$sql = "SELECT id, categori, title, header, image, text, date FROM politica WHERE id='$new' ORDER BY id DESC LIMIT 5";
			if(!$result = mysqli_query($link, $sql))
				return false;
				$items = mysqli_fetch_array($result);
				return $items;
}
