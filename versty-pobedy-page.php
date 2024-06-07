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
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/steklozavod.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<title>Версты Победы | Музей п. Мариец</title>
</head>
<body>
	<?php include 'mobile-menu.php';?>
	<div class="container">
		<?php include 'header.php';?>
		<div id="title" class="big_title">Версты победы</div>
		<div class="description">
			<input type="checkbox" class="read_more_state" id="moreChecked" />
			<div class="read_more_wrap">
	  		<p class="classic_paragraph">9 мая 1945 года. Эта дата навсегда вошла в историю человечества. Каждая  семья с болью вспоминает ушедших на фронт и не вернувшихся, навеки оставшихся  на передовой. И маршал, и рядовой солдат, и медсестра, и интендант - каждый внес на алтарь победы посильную лепту. Представители всех наций и народностей Советского Союза участвовали в смертельной схватке с фашистскими агрессорами.</p>
	  		<p class="read_more_target classic_paragraph">Советские Вооруженные Силы, изгнав врагов со своей земли, беззаветно сражались с немецко-фашистскими войсками на территории 12 государств Европы и Азии и освободили от фашистских поработителей более 180 миллионов человек.
Великой ценой досталась нам Победа. Более 27 миллионов человек отдали свою жизнь за Родину, за счастье и мир на Земле... Сожжены десятки тысяч сел и городов... Такой ценой наш народ отстоял свободу.</p>
  		</div>
  		<label for="moreChecked" class="read_more_trigger"></label>
		</div>

		<p class="title_lite">Участники Великой Отечественной войны</p>
	<div class="card_wrap">
			<?php 
				$connect = mysqli_connect("localhost", "pma", "Qwe123", "u104578_admin");
				if ($connect == false) {echo "Связь с БД не установлена";}
				$data = mysqli_query($connect, "SELECT * FROM `zal2_people`");
				while ($data_card = mysqli_fetch_assoc($data)) { ?>
					<a class="card_link" href="people_two.php?ID=<?php echo $data_card['id'];?>">
						<div class="card">
							<img class="card_preview" src="<?php echo $data_card['preview'] ?>">
							<span class="card_title"><?php echo $data_card['title']; ?></span>
							<div class="card_id">№<?php echo $data_card['id']; ?></div>
							<div class="card_date">
								<img class="card_date_icon" src="/img/date_icon.svg">
								<span class="card_date_text"><?php echo $data_card['date']; ?></span>
							</div>
						</div>
					</a>
			<?php }; ?>
		</div>

		<div class="hr"><hr></div>

	<!-- <p class="title_lite">Экспонаты</p>
		<div class="card_wrap">
			<?php 
				$data = mysqli_query($connect, "SELECT * FROM `zal2_items`");
				while ($data_card = mysqli_fetch_assoc($data)) { ?>
					<a class="card_link" href="item_two.php?ID=<?php echo $data_card['id'];?>">
						<div class="card">
							<img class="card_preview" src="<?php echo $data_card['preview'] ?>">
							<span class="card_title"><?php echo $data_card['title']; ?></span>
							<div class="card_id">№<?php echo $data_card['id']; ?></div>
							<div class="card_date">
								<img class="card_date_icon" src="/img/date_icon.svg">
								<span class="card_date_text"><?php echo $data_card['date']; ?></span>
							</div>
						</div>
					</a>
			<?php }; ?>
		</div>
	</div>
	<?php $mysqli->close();?> -->
</body>
</html>