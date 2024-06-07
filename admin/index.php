<?php
	session_start();
	if (! $_SESSION['mmadmin'])
	header('Location: admin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<title>Админ панель mariecmuseum.ru</title>
</head>
<body>
	<form class="exit" action="exit.php">
		<input type="submit" value="Выход"></input>
	</form>

	<div class="container">
		<input class="prev" type="submit" value="Назад" onclick="plusSlides(-1)">
		<input class="next" type="submit" value="Вперед" onclick="plusSlides(1)">
		<input class="site" type="submit" value="На сайт" onclick="site()">
	    	<div class="slide">
	    		<form class="form one" action="newartzal1.php" method="post">
	    			<h2>Зал 1. Стеклозавод</h2>
	    			<input class="title" name="title" placeholder="Название экспоната">
	    			<textarea class="text" name="text" placeholder="Текст статьи"></textarea>
	    			<textarea class="image" name="image" placeholder="Ссылки на фотографии"></textarea>
	    			<input class="submit" type="submit" value="Добавить статью">
	    		</form>
	    	</div>
	    	<div class="slide">
	    		<form class="form two" action="newartzal2_people.php" method="post">
	    			<h2>Зал 2. ВОВ Личности</h2>
	    			<input class="title" name="title" placeholder="Название экспоната">
	    			<textarea class="text" name="text" placeholder="Текст статьи"></textarea>
	    			<textarea class="image" name="image" placeholder="Ссылки на фотографии"></textarea>
	    			<input class="submit" type="submit" value="Добавить статью">
	    		</form>
	    	</div>
	    	<div class="slide">
	    		<form class="form three" action="newartzal2_items.php" method="post">
	    			<h2>Зал 2. ВОВ Предметы</h2>
	    			<input class="title" name="title" placeholder="Название экспоната">
	    			<textarea class="text" name="text" placeholder="Текст статьи"></textarea>
	    			<textarea class="image" name="image" placeholder="Ссылки на фотографии"></textarea>
	    			<input class="submit" type="submit" value="Добавить статью">
	    		</form>	    	
	    	</div>
	    	<div class="slide">
	    		<form class="form four" action="newartzal3_people.php" method="post">
	    			<h2>Зал 3. Школа Личности</h2>
	    			<input class="title" name="title" placeholder="Название экспоната">
	    			<textarea class="text" name="text" placeholder="Текст статьи"></textarea>
	    			<textarea class="image" name="image" placeholder="Ссылки на фотографии"></textarea>
	    			<input class="submit" type="submit" value="Добавить статью">
	    		</form>
	    	</div>
	    	<div class="slide">
	    		<form class="form five" action="newartzal3.php" method="post">
	    			<h2>Зал 3. Школа</h2>
	    			<input class="title" name="title" placeholder="Название экспоната">
	    			<textarea class="text" name="text" placeholder="Текст статьи"></textarea>
	    			<textarea class="image" name="image" placeholder="Ссылки на фотографии"></textarea>
	    			<input class="submit" type="submit" value="Добавить статью">
	    		</form>
	    	</div>
	    	<div class="slide">
	    		<form class="form six" action="newartzal4_people.php" method="post">
	    			<h2>Зал 4. Церковь Личности</h2>
	    			<input class="title" name="title" placeholder="Название экспоната">
	    			<textarea class="text" name="text" placeholder="Текст статьи"></textarea>
	    			<textarea class="image" name="image" placeholder="Ссылки на фотографии"></textarea>
	    			<input class="submit" type="submit" value="Добавить статью">
	    		</form>
	    	</div>
	    	<div class="slide">
	    		<form class="form seven" action="newartzal4.php" method="post">
	    			<h2>Зал 4. Церковь</h2>
	    			<input class="title" name="title" placeholder="Название экспоната">
	    			<textarea class="text" name="text" placeholder="Текст статьи"></textarea>
	    			<textarea class="image" name="image" placeholder="Ссылки на фотографии"></textarea>
	    			<input class="submit" type="submit" value="Добавить статью">
	    		</form>
	    	</div>
	</div>

	<script type="text/javascript" src="../js/slider.js"></script>

	<script type="text/javascript">
		var form_one = document.querySelector(".one");
		form_one.onsubmit = function () {
			var text = form_one.text;
			text.value = '<p class="classic_paragraph">' + text.value + '</p>';
			text.value = text.value.replace(/\n/g, '</p><p class="classic_paragraph">');
		};
		var form_two = document.querySelector(".two");
		form_two.onsubmit = function () {
			var text = form_two.text;
			text.value = '<p class="classic_paragraph">' + text.value + '</p>';
			text.value = text.value.replace(/\n/g, '</p><p class="classic_paragraph">');
		};
		var form_three = document.querySelector(".three");
		form_three.onsubmit = function () {
			var text = form_three.text;
			text.value = '<p class="classic_paragraph">' + text.value + '</p>';
			text.value = text.value.replace(/\n/g, '</p><p class="classic_paragraph">');
		};
		var form_four = document.querySelector(".four");
		form_four.onsubmit = function () {
			var text = form_four.text;
			text.value = '<p class="classic_paragraph">' + text.value + '</p>';
			text.value = text.value.replace(/\n/g, '</p><p class="classic_paragraph">');
		};
		var form_five = document.querySelector(".five");
		form_five.onsubmit = function () {
			var text = form_five.text;
			text.value = '<p class="classic_paragraph">' + text.value + '</p>';
			text.value = text.value.replace(/\n/g, '</p><p class="classic_paragraph">');
		};
		var form_six = document.querySelector(".six");
		form_six.onsubmit = function () {
			var text = form_six.text;
			text.value = '<p class="classic_paragraph">' + text.value + '</p>';
			text.value = text.value.replace(/\n/g, '</p><p class="classic_paragraph">');
		};
		var form_seven = document.querySelector(".seven");
		form_seven.onsubmit = function () {
			var text = form_seven.text;
			text.value = '<p class="classic_paragraph">' + text.value + '</p>';
			text.value = text.value.replace(/\n/g, '</p><p class="classic_paragraph">');
		};


		function site() {
			window.location.href = "/index.php";
		}
	</script>
</body>
</html>