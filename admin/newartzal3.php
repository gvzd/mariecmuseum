<?php
	$title = $_POST['title'];
	$text = $_POST['text'];
	$date = date("d.m.Y");
	$image = $_POST['image'];
	$first_link = explode(", ", $image);
	$first_link = $first_link[0];

	// Параметры для подключения
	$db_host = "localhost"; 
	$db_user = "u104578_admin"; // Логин БД
	$db_password = "P1ssw0rD"; // Пароль БД
	$db_base = 'u104578_admin'; // Имя БД
	$db_table = "zal3"; // Имя Таблицы БД

	try {
		$db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
	} catch (PDOException $e) {print "0";}

	// Данные для запроса
	$data = array( 'title' => $title, 'text' => $text, 'date' => $date, 'image' => $image, 'first_link' => $first_link); 
	// SQL-запрос
	$query = $db->prepare("INSERT INTO `zal3` (`date`, `title`, `text`, `url`, `preview`) VALUES ('$date', '$title', '$text', '$image', '$first_link')");
	// Запрос с данными
	$query->execute($data);
	$result = true;

	if ($result) {
		header('location: index.php');
	} else { echo "Error";}
?>