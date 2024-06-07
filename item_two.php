<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
	<link rel="manifest" href="/img/site.webmanifest">
	<link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/all.css">
	<link rel="stylesheet" type="text/css" href="/css/item.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php
		$ID = $_GET["ID"]; 
		$connect = mysqli_connect("localhost", "pma", "Qwe123", "u104578_admin");
		if ($connect == false) {echo "Связь с БД не установлена";}
		$data = mysqli_query($connect, "SELECT * FROM `zal2_items` WHERE `id` = $ID");
		$data_card = mysqli_fetch_assoc($data);
		$url = explode(", ", $data_card['url']);
	?>
	<title><?php echo $data_card['title']; ?> | Музей п. Мариец</title>
</head>
<body>
	<?php include 'mobile-menu.php';?>
	<div class="container">
		<?php include 'header.php';?>
		<p class="title_lite"><?php echo $data_card['title']; ?></p>
		<div class="item_container">
			<div class="item_photo">
				<div class="photo_body">
					<div class="prev" <?php if (count($url) <= 1) { ?>  style="opacity: 0;" <?php } ?> onclick="plusSlides(-1)"><img style="transform: rotate(180deg);" src="/img/arrow.svg"></div>
					<div class="next" <?php if (count($url) <= 1) { ?>  style="opacity: 0;" <?php } ?> onclick="plusSlides(1)"><img src="/img/arrow.svg"></div>
				    <?php
				    	for ($i=0; $i < count($url); $i++) {
				    ?>
				    	<img class="slide" src="<?php echo $url[$i]; ?>">
				    <?php } ?>
				</div>
			</div>
			<div class="item_description">
				<?php echo $data_card['text']; ?>
			</div>
		</div>
		<footer>
			<p class="footer_text">&copy; Все права защищены.  Виртуальный музей поселка Мариец</p>
			<p class="footer_text">2021-2023</p>
		</footer>
	</div>

	<script type="text/javascript" src="/js/slider.js"></script>
	<?php $mysqli->close(); ?>
</body>
</html>