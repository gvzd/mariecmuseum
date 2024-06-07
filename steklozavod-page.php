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
	<title>От Николаевской хрустальной фабирики до стеклозавода Мариец | Музей п. Мариец</title>
</head>
<body>
	<?php include 'mobile-menu.php';?>
	<div class="container">
		<?php include 'header.php';?>
		<div id="title" class="big_title">От Николаевской хрустальной фабрики<br>до стеклозавода Мариец</div>
		<div class="description">
			<input type="checkbox" class="read_more_state" id="moreChecked" />
			<div class="read_more_wrap">
			<p class="classic_paragraph">
				В 1842 г. казанский купец Егор Ульянов на купленной им земле решил построить предприятие по производству стекла. Так, в верховьях реки Шора, в Уржумском уезде Вятской губернии, появилась "Николаевская хрустальная фабрика", названная в честь императора России Николая I. На этом предприятии производили массовую сортовую посуду из осветленного стекла: графины, стаканы, рюмки и стопки, а также аптекарские склянки. Изготавливали и хрустальную шлифованную и гладкую посуду. 
				</p>
				<p class="read_more_target classic_paragraph">В конце 50-х - начале 60-х гг. XIX века в 5-ти километрах от существующего завода был построен второй завод Егора Ульянова, который назывался «Троицкая хрустальная фабрика», в народе его называли «заводом на Лавинской».</p>
				<p class="read_more_target classic_paragraph">В связи с истощением запаса дров на Лавинской сын Егора Ульянова, Прохор, ликвидировал «Троицкую хрустальную фабрику» и построил новое предприятие в версте от существововавшей «Николаевской хрустальной фабрики». В 1881 году оба завода объединились и стали выпускать сортовое и оконное стекло, затем - ламповое стекло и лабораторную посуду.</p>
				<p class="read_more_target classic_paragraph">После смерти Прохора Ульянова его жена доверила всё производство своему родственнику Таланцеву и конторщику Овчинникову. Так, в 1888 г появился «Николаевский хрустально-стекольный завод торгового дома «Наследники М.А. Ульяновой Таланцев и Овчинников», народ по-прежнему называл его «Ульяновским заводом». Предприятие выпускало сортовое, листовое, аптекарское и ламповое стекло. На заводе увеличился выпуск лампадок, мухоловок . лампового стекла. Производились различные изделия: лампочки спиртовые, чашки выпарительные, трубки пробирные, аппараты Кипа, цилиндры для элементов Бунзена и Лекланше, сигнальные стекла для водного и железнодорожного транспорта и др.</p>
				<p class="read_more_target classic_paragraph">С приходом советской власти, когда в нашем крае стала устанавливаться автономия, возникла необходимость в изменени административно-территориальных единиц. На заседании обкома партии в Йошкар-Оле один из партийных деятелей предложил назвать поселок "Мариец", с чем многие согласились. И соответственно стеклозавод в нашем поселке получил одноименное название. В конце 20-х гг XX века новыми властями были орпеделены пути развития завода «Мариец», как завода по производству стеклянной тары. Выпускались бутылки емкостью в три, полтора и поллитра, прессованная сортовая и другая посуда.</p>
				<p class="read_more_target classic_paragraph">В годы Великой Отечественной войны завод был переоборудован под производство военной продукции - фляг, дротов. Всего за военные годы на нашем заводе было создано дротов стеклянных - 114, 7 тонн, аптекарской посуды - 920900 штук, фляг - 34500 штук.</p>
				<p class="read_more_target classic_paragraph">К концу войны и после ее окончания ассортимент выпускаемой продукции стал разнообразным: склянки для биопрепаратов, лабораторное и медицинское стекло (пробирки, чашки Петри), аккумуляторные банки, изоляторы, ролики и т.п. Успешно было налажено производство кефирных бутылок.</p>
				<p class="read_more_target classic_paragraph">Завод просуществовал до 1996 г. Затем в его цехах открыли филиал Марийского машиностроительного завода, который действовал до 2010 года. В настоящее время в здании завода ничего не производят. Тем не менее, стеклозавод для всех жителей поселка является гордостью. На заводе работали наши предки, а также именно со строительства стеклозавода началась история нашего поселка.</p>
		</div>
		<label for="moreChecked" class="read_more_trigger"></label>
		</div>
		<div class="card_wrap">
			<?php
				$connect = mysqli_connect("localhost", "pma", "Qwe123", "u104578_admin");
				if ($connect == false) {echo "<h1>Связь с БД не установлена</h1>";}
				$data = mysqli_query($connect, "SELECT * FROM `zal1`");
				while ($data_card = mysqli_fetch_assoc($data)) { ?>
					<a class="card_link" href="item_one.php?ID=<?php echo $data_card['id'];?>">
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