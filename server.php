﻿<?php
	//print_r($_FILES);
	$filename = $_FILES['photo']['name'];
	$final_width_of_image = 200;
	$pathBig = "big/".$filename;
	$pathSmall = "small/".$filename;

	if($_FILES['photo']['type'] == "image/jpeg"){
		//if(move_uploaded_file($_FILES['photo']['tmp_name'], $pathBig)){
		//	echo $_FILES['photo']['name']." успешно загружен!";
		//}
		move_uploaded_file($_FILES['photo']['tmp_name'], $pathBig);

		//теперь делаем уменьшеную копию
		$im = imagecreatefromjpeg($pathBig); //исходник полуенный шагом ранее
		$ox = imagesx($im); //размеры исходника
		$oy = imagesy($im);
  
        $nx = $final_width_of_image; //новые размеры картинки
        $ny = floor($oy * ($final_width_of_image / $ox));
  
        $nm = imagecreatetruecolor($nx, $ny); //создаем заготовку картинки нужного размера
  
        imagecopyresized($nm, $im, 0,0,0,0,$nx,$ny,$ox,$oy); //делаем копию и пихаем в заготовку
		imagejpeg($nm, $pathSmall); //cоздаём файл jpeg 

		//осталось вернуться на индексовую страницу со страницы sever.php
		$url = "index.php";
		header("location: $url");

	} else {
		echo "<p>Wrong type of file!</p>";
	}
?>
