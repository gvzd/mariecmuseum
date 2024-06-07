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
	<link rel="stylesheet" type="text/css" href="/css/steklozavod.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<title>Церковь Николая Чудотворца | Музей п. Мариец</title>
</head>
<body>
	<?php include 'mobile-menu.php';?>
	<div class="container">
		<?php include 'header.php';?>
		<div id="title" class="big_title">Церковь Николая Чудотворца</div>
		<div class="description">
			<input type="checkbox" class="read_more_state" id="moreChecked" />
			<div class="read_more_wrap">
	  		<p class="classic_paragraph">Церковь Николая Чудотворца построена в 1870 году. Здание церкви каменное. На четырёхскатной крыше возвышаются пять зелёных главок, увенчанных крестами. Когда-то под ярусным шатром располагалась звонница, а рядом - трапезная. Средства на постройку православного храма выделил казанский купец П.Е.Ульянов, владелец стеклозавода.</p>
	  		<p class="read_more_target classic_paragraph">Храм был однопрестольным, алтарь освящен благочинным -протоиереем Малмыжского собора Николаем Шибакиным в честь святителя Николая, архиепископа Мирликийского, чудотворца. В июне 1871 года был создан и приход, что закреплено печатью старосты Шоринского общества А.Н. Мамаева. Последним священником, служившим на приходе с 1893 года вплоть до закрытия церкви, был протоиерей Александр Увицкий.</p>
	  		<p class="read_more_target classic_paragraph">До закрытия церкви в 1928- 2009 гг. приход входил в состав Краснококшайского церковного управления.</p>
	  		<p class="read_more_target classic_paragraph"Храм был закрыт в 1928 году, и по решению советских властей здание церкви было передано под клуб.></p>
	  		<p class="read_more_target classic_paragraph">Вновь приход Свято-Никольской церкви поселка Мариец по благословению архиепископа Йошкар-Олинского и Марийского Иоанна был зарегистрирован 5 декабря 2002 года. Богослужения совершались в молельном доме, паству окормлял священник Троицкого храма села Мамсинер иерей Лев Федотов.</p>
	  		<p class="read_more_target classic_paragraph">30 сентября 2005 года сессия районного собрания дала согласие на передачу приходу здания церкви в поселке Мариец. Начались богослужения в храме. С 1 июня 2009 года настоятелем Свято-Никольской церкви назначен иерей Николай Аникин. С принятием нового устава храм именуется храмом Святителя Николая Мирликийского.</p>
  		</div>
  		<label for="moreChecked" class="read_more_trigger"></label>
		</div>

		<p class="title_lite">Личности</p>
		<div class="card_wrap">
			<?php 
				$connect = mysqli_connect("localhost", "pma", "Qwe123", "u104578_admin");
				if ($connect == false) {echo "Связь с БД не установлена";}
				$data = mysqli_query($connect, "SELECT * FROM `zal4_people`");
				while ($data_card = mysqli_fetch_assoc($data)) { ?>
					<a class="card_link" href="people_four.php?ID=<?php echo $data_card['id'];?>">
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

		<p class="title_lite">Экспонаты</p>
			<div class="card_wrap">
				<?php 
					$data = mysqli_query($connect, "SELECT * FROM `zal4`");
					while ($data_card = mysqli_fetch_assoc($data)) { ?>
						<a class="card_link" href="item_four.php?ID=<?php echo $data_card['id'];?>">
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
		<?php $mysqli->close();?>
</body>
</html>