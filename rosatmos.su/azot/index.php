<?php
	//Utm метки
	session_start();
	$_SESSION["utm_source"] = $_GET["utm_source"];
	$_SESSION["utm_medium"] = $_GET["utm_medium"]; 
  	$_SESSION["utm_campaign"] = $_GET["utm_campaign"]; 
  	$_SESSION["utm_term"] = $_GET["utm_term"]; 
  	$_SESSION["utm_content"] = $_GET["utm_content"];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="yandex-verification" content="6aea4db1baa65eca" />
	<title>РосАтмос | Поставки генераторов азота и компрессорного оборудования по всей России</title>
	<meta name="description" content="">
	<link rel="shortcut icon" type="image/x-icon" href="https://rosatmos.su/img/favicon.webp">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/main.min.css">
	<script src="//st.yagla.ru/js/y.c.js?h=8710fab569fd8b177a1996fa7594dc28"></script>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-push-2 col-sm-6 col-sm-push-3">
					<div class="logo">
						<img src="img/logo.png" alt="">
						<span>Поставки генераторов азота и компрессорного оборудования по всей России</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="first-screen">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Получите лучшее предложение по генераторам азота в соотношении цена-качество с доставкой от 1 дня</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form_inner">
						<div class="form-wrap">
							<div class="title">
								Подбор и запрос стоимости на <?php echo date('d.m.y'); ?><!--<b class="yagla-data"></b>-->
							</div>
							<form id="form1">
								<input type="hidden" name="leadform" value="Форма на первом экране">
								<div class="row">
									<div class="col-xs-6">
										<div class="input-field">
											
											<label>Ваш телефон*</label>
											<input type="text" name="phone">
										</div>
									</div>
									<div class="col-xs-6">
										<div class="textarea-field">
											<label>Марка генератора азота и тех.параметры</label>
											<div class="field-wrap">
											<textarea name="comment"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<button data-attr="ОТПРАВЛЯЕТСЯ..."><span>ОТПРАВИТЬ ЗАЯВКУ</span></button>
										<input type="hidden" name="spam" value="">
									</div>
									<div class="col-xs-6">
										<div class="agreement">
											Нажимая на эту кнопку вы соглашаетесь <br>с <a href="javascript:void(0)" class="modal-btn" data-modal="privacy">политикой конфиденциальности</a>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="info-wrap">
							<span>Звоните бесплатно</span>
							<a href="tel:8(800)5513815" class="phone roistat-phone-tel"><span class="roistat-phone-tel">8 800 551 38 15</span></a><br>
							<a href="javascript:void(0)" data-modal="phonecall" class="modal-btn">Заказать обратный звонок</a><br>
							<a href="mailto:zakaz@rosatmos.su" class="mail-link">zakaz@rosatmos.su</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="catalog">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Ассортимент генераторов азота</h2>
				</div>
			</div>
			<div class="row">

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="catalog-item">
						<div class="catalog-item_img">
							<img src="img/catalog/001.jpg" alt="">
							<div class="catalog-item_btn">
								<div class="price-btn">
									<a href="javascript:void(0)" data-modal="price" class="modal-btn">Получить прайс</a>
								</div>
							</div>
						</div>
						<div class="catalog-item_title">Генераторы <br>азота</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="catalog-item">
						<div class="catalog-item_img">
							<img src="img/catalog/002.jpg" alt="">
							<div class="catalog-item_btn">
								<div class="price-btn">
									<a href="javascript:void(0)" data-modal="price" class="modal-btn">Получить прайс</a>
								</div>
							</div>
						</div>
						<div class="catalog-item_title">Азотные <br>станции</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="catalog-item">
						<div class="catalog-item_img">
							<img src="img/catalog/003.jpg" alt="">
							<div class="catalog-item_btn">
								<div class="price-btn">
									<a href="javascript:void(0)" data-modal="price" class="modal-btn">Получить прайс</a>
								</div>
							</div>
						</div>
						<div class="catalog-item_title">Контейнерные азотные станции</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="catalog-item">
						<div class="catalog-item_img">
							<img src="img/catalog/004.jpg" alt="">
							<div class="catalog-item_btn">
								<div class="price-btn">
									<a href="javascript:void(0)" data-modal="price" class="modal-btn">Получить прайс</a>
								</div>
							</div>
						</div>
						<div class="catalog-item_title">Компрессоры для <br>азотных станций</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="catalog-item">
						<div class="catalog-item_img">
							<img src="img/catalog/005.jpg" alt="">
							<div class="catalog-item_btn">
								<div class="price-btn">
									<a href="javascript:void(0)" data-modal="price" class="modal-btn">Получить прайс</a>
								</div>
							</div>
						</div>
						<div class="catalog-item_title">Азотные компрессорные станции</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="catalog-item">
						<div class="catalog-item_img">
							<img src="img/catalog/006.jpg" alt="">
							<div class="catalog-item_btn">
								<div class="price-btn">
									<a href="javascript:void(0)" data-modal="price" class="modal-btn">Получить прайс</a>
								</div>
							</div>
						</div>
						<div class="catalog-item_title">Азотные станции <br>для лазерной резки</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="catalog-item service">
						<div class="catalog-item_img">
							<img src="img/catalog/11.jpg" alt="">
						</div>
						<div class="catalog-item_title_service">
							<div class="number">
								50
							</div>
							<div class="text">
								сервисных<br>центров
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="brands">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Поставляем продукцию следующих марок</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="choose-brand">
						<span class="icon"></span>
						<span>Выберите производителя</span>
					</div>
				</div>
			</div>
			<div class="row">
				<form id="form2">
					<input type="hidden" name="leadform" value="Запрос прайсов">
					<div class="col-sm-8 col-xs-12">
						<div class="brands-list">
							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="АГС"><span></span></label>
								<div class="brand-img"><img src="img/brands/01.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="Оксимат"><span></span></label>
								<div class="brand-img"><img src="img/brands/02.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="Провита"><span></span></label>
								<div class="brand-img"><img src="img/brands/03.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="AIR-C"><span></span></label>
								<div class="brand-img"><img src="img/brands/04.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="AIRSYST"><span></span></label>
								<div class="brand-img"><img src="img/brands/05.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="ATS"><span></span></label>
								<div class="brand-img"><img src="img/brands/06.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="BOGE"><span></span></label>
								<div class="brand-img"><img src="img/brands/07.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="Dalgakiran"><span></span></label>
								<div class="brand-img"><img src="img/brands/08.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="GENERAL GAS"><span></span></label>
								<div class="brand-img"><img src="img/brands/09.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="Ideal Makina"><span></span></label>
								<div class="brand-img"><img src="img/brands/10.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="Inmatec"><span></span></label>
								<div class="brand-img"><img src="img/brands/11.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="Magnus"><span></span></label>
								<div class="brand-img"><img src="img/brands/12.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="MIKROPOR"><span></span></label>
								<div class="brand-img"><img src="img/brands/13.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="Omega Air"><span></span></label>
								<div class="brand-img"><img src="img/brands/14.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="PARKER"><span></span></label>
								<div class="brand-img"><img src="img/brands/15.jpg" alt=""></div>
							</div>

							<div class="brand-item">
								<label><input type="checkbox" name="brand[]" value="Pneumatech"><span></span></label>
								<div class="brand-img"><img src="img/brands/16.jpg" alt=""></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="form-wrap">
							<div class="title">
								<img src="img/excel.png" alt="">
								<span>Получить прайс-лист <br>на <?php echo date('d.m.y'); ?></span>
							</div>
							<div class="input-field">
								<label>Ваше имя</label>
								<input type="text" name="name">
							</div>
							<div class="input-field">
								<label>Ваш телефон*</label>
								<input type="tel" name="phone">
							</div>
							<button data-attr="ОТПРАВЛЯЕТСЯ..."><span>Получить прайс</span></button>
							<input type="hidden" name="spam" value="">	
							<div class="agreement">
								Нажимая на эту кнопку вы соглашаетесь <br>с <a href="/politic">политикой конфиденциальности</a>
							</div>
						</div>
						<div class="fact">
							<span class="number">16</span>
							<span class="text">брендов <br>в ассортименте</span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="ceo">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<div class="ceo-title">
						Я, Коруменко Михаил Юрьевич, основатель и директор РосАтмос, лично слежу за выполнением всех объязательств, взятых на себя компанией!
					</div>
					<div class="ceo-img visible-xs">
						<img src="img/ceo.jpg" class="img-responsive" alt="">
						<div class="ceo-info">
							<span class="position">директор компании</span>
							<span class="name">Коруменко Михаил Юрьевич</span>
							<a href="javascript:void(0)" class="exp-link">Опыт в отрасли 18 лет</a>
						</div>
						<div class="ceo-exp hidden">
							<a href="javascript:void(0)" class="close"></a>
							<div class="title">Коруменко Михаил Юрьевич, <br>опыт в отрасли:</div>
							<div class="exps">
								<div class="exp-item">
									<div class="year">2002 - 2003</div>
									<div class="text">
										Промышленная компания (торгующая организация, продажа компрессорного и насосного оборудования, менеджер по продажам)
									</div>
								</div>
								<div class="exp-item">
									<div class="year">2003 - 2004</div>
									<div class="text">
										Ремеза-Юг (представительство завода Ремеза в ЮФО РФ, менеджер по продажам
компрессорного оборудования)
									</div>
								</div>
								<div class="exp-item">
									<div class="year">2004 - 2015</div>
									<div class="text">
										Компрессорцентр (генеральное представительство завода Airpol на территории РФ, начальник отдела продаж, коммерческий директор)
									</div>
								</div>
								<div class="exp-item">
									<div class="year">2015 - 2019</div>
									<div class="text">
										Ростовский компрессорный завод (производство винтовых и поршневых компрессоров,
ресиверов, осушителей, коммерческий директор)
									</div>
								</div>
								<div class="exp-item">
									<div class="year">2019 - н.в.</div>
									<div class="text">
										Росатмос (официальный представитель ведущих производителей компрессорного
оборудования на территории РФ, основатель и директор)
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ceo-garant-title">
						Я гарантирую, что:
					</div>
					<div class="ceo-garanties">
						<div class="ceo-item">
							<span class="icon"><img src="img/f1.png" alt=""></span>
							<div class="title">Вы получите лучшее предложение <br>в соотношении цена-качество-срок</div>
							<div class="text">
								Не смотря на то, что РосАтмос работает с 16 проверенными годами производителями и являеется официальным дилером, наши предпочтения беспристрастны и поэтому мы преложим лучшее решение вашей задачи, ориентируясь по всем производителям на складксие остатки в регионах РФ, актуальне цены и технические характеристики оборудования.
							</div>
						</div>
						<div class="ceo-item">
							<span class="icon"><img src="img/f2.png" alt=""></span>
							<div class="title">Любое наше предложение включает <br>совокупные издержки владения</div>
							<div class="text">
								Во-первых, покупную цену соответствующего оборудования. Во-вторых стоимость энергии, которую это оборудование потребляет на протяжении всего срока службы. В-третьих, стоимость эксплуатации и техобслуживания, требующихся для данного оборудования на протяжении всего срока службы.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-6 hidden-xs">
					<div class="ceo-img">
						<img src="img/ceo.jpg" class="img-responsive" alt="">
						<div class="ceo-info">
							<span class="position">директор компании</span>
							<span class="name">Коруменко Михаил Юрьевич</span>
							<a href="javascript:void(0)" class="exp-link">Опыт в отрасли 18 лет</a>
						</div>
						<div class="ceo-exp hidden">
							<a href="javascript:void(0)" class="close"></a>
							<div class="title">Коруменко Михаил Юрьевич, <br>опыт в отрасли:</div>
							<div class="exps">
								<div class="exp-item">
									<div class="year">2002 - 2003</div>
									<div class="text">
										Промышленная компания (торгующая организация, продажа компрессорного и насосного оборудования, менеджер по продажам)
									</div>
								</div>
								<div class="exp-item">
									<div class="year">2003 - 2004</div>
									<div class="text">
										Ремеза-Юг (представительство завода Ремеза в ЮФО РФ, менеджер по продажам
компрессорного оборудования)
									</div>
								</div>
								<div class="exp-item">
									<div class="year">2004 - 2015</div>
									<div class="text">
										Компрессорцентр (генеральное представительство завода Airpol на территории РФ, начальник отдела продаж, коммерческий директор)
									</div>
								</div>
								<div class="exp-item">
									<div class="year">2015 - 2019</div>
									<div class="text">
										Ростовский компрессорный завод (производство винтовых и поршневых компрессоров,
ресиверов, осушителей, коммерческий директор)
									</div>
								</div>
								<div class="exp-item">
									<div class="year">2019 - н.в.</div>
									<div class="text">
										Росатмос (официальный представитель ведущих производителей компрессорного
оборудования на территории РФ, основатель и директор)
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="cases">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>
						Примеры поставленного и обслуживаемого <br>компрессорного оборудования
						<div class="fact">
							<div class="fact-wrap">
								<span class="number">
									10+
									<span class="small">лет</span>
								</span>
								<span class="text">
									опыт<br>специалистов
								</span>
							</div>
						</div>
					</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="case-item mt10">
						<div class="case-item_title">
							Дилерский центр Lada
							<span class="location">Москва</span>
						</div>
						<div class="row">
							<div class="col-sm-5 col-xs-8">
								<div class="case-item_task">
									<div class="case-item_task-title">
										Задача
									</div>
									<div class="case-item_task-text">
										<p>За&nbsp;ограниченный бюджет оснастить сервисы максимально качественными компрессорами с&nbsp;недорогим обслуживанием</p>
									</div>
								</div>
								<div class="case-item_task">
									<div class="case-item_task-title">
										Решение
									</div>
									<div class="case-item_task-text">
										<p>
											Винтовой компрессор MIG&nbsp;18 (Прямой привод)&nbsp;&mdash; <span>222&nbsp;000 руб</span> <br>
											Осушитель холодильный OP50&nbsp;&mdash; <span>72&nbsp;800 руб</span> <br>
											Ресивер Р500/10&nbsp;&mdash; <span>24&nbsp;370 руб</span>
										</p>
										<p><span>Итого: 319 170 руб</span></p>
										<p><span>Срок поставки - 2 дня</span></p>
									</div>
								</div>
							</div>
							<div class="col-sm-2 col-xs-4">
								<div class="gallery-item eq1">
									<a href="img/case/1/1.jpg" data-fancybox="case1"><img src="img/case/1/1-thumb.jpg" alt=""></a>
									<a href="img/case/1/2.jpg" data-fancybox="case1" class="hidden"><img src="img/case/1/2.jpg" alt=""></a>
									<a href="img/case/1/3.jpg" data-fancybox="case1" class="hidden"><img src="img/case/1/3.jpg" alt=""></a>
									<a href="img/case/1/4.jpg" data-fancybox="case1" class="hidden"><img src="img/case/1/4.jpg" alt=""></a>
								</div>
							</div>
							<div class="col-sm-5 col-xs-12">
								<div class="case-item_five eq1">
									<div class="case-item_five-title">
										Стоимость владения сроком на&nbsp;5&nbsp;лет
									</div>
									<div class="case-item_five-text">
										<p>С&nbsp;учетом 8-ми часового рабочего дня и&nbsp;стоимости электроэнергии <span>3,6&nbsp;руб/кВт</span></p>
										<p>Цена оборудования: <span>430&nbsp;000&nbsp;руб</span></p>
										<p>Затраты на&nbsp;эксплуатацию (ТО-1/ТО-5): <br><span>101&nbsp;160 руб</span></p>
										<p>Затраты на&nbsp;электроэнергию: <span>1&nbsp;332&nbsp;000 руб</span></p>
										<p>Итого: <span>1&nbsp;863&nbsp;160 руб</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="case-item">
						<div class="case-item_title">
							Производство тротуарной плитки
							<span class="location">Ростов-на-Дону</span>
						</div>
						<div class="row">
							<div class="col-sm-5 col-xs-8">
								<div class="case-item_task">
									<div class="case-item_task-title">
										Задача
									</div>
									<div class="case-item_task-text">
										<p>Обеспечение производства сжатым воздухом, экономия электроэнергии</p>
									</div>
								</div>
								<div class="case-item_task">
									<div class="case-item_task-title">
										Решение
									</div>
									<div class="case-item_task-text">
										<p>
											Винтовой компрессор Airrus 75PR (Прямой привод, частотный преобразователь)&nbsp;&mdash; <span>1&nbsp;200&nbsp;000 руб</span>
										</p>
										<p><span>Итого: 1&nbsp;200&nbsp;000 руб</span></p>
										<p><span>Срок поставки&nbsp;&mdash; 5&nbsp;дней</span></p>
									</div>
								</div>
							</div>
							<div class="col-sm-2 col-xs-4">
								<div class="gallery-item eq2">
									<a href="img/case/2/1.jpg" data-fancybox="case2"><img src="img/case/2/1-thumb.jpg" alt=""></a>
									<a href="img/case/2/2.jpg" data-fancybox="case2" class="hidden"><img src="img/case/2/2.jpg" alt=""></a>
									<a href="img/case/2/3.jpg" data-fancybox="case2" class="hidden"><img src="img/case/2/3.jpg" alt=""></a>
									<a href="img/case/2/4.jpg" data-fancybox="case2" class="hidden"><img src="img/case/2/4.jpg" alt=""></a>
									<a href="img/case/2/5.jpg" data-fancybox="case2" class="hidden"><img src="img/case/2/5.jpg" alt=""></a>
									<a href="img/case/2/6.jpg" data-fancybox="case2" class="hidden"><img src="img/case/2/6.jpg" alt=""></a>
									<a href="img/case/2/7.jpg" data-fancybox="case2" class="hidden"><img src="img/case/2/7.jpg" alt=""></a>
									<a href="img/case/2/8.jpg" data-fancybox="case2" class="hidden"><img src="img/case/2/8.jpg" alt=""></a>
								</div>
							</div>
							<div class="col-sm-5 col-xs-12">
								<div class="case-item_five eq2">
									<div class="case-item_five-title">
										Стоимость владения сроком на&nbsp;5&nbsp;лет
									</div>
									<div class="case-item_five-text">
										<p>С&nbsp;учетом 8-ми часового рабочего дня и&nbsp;стоимости электроэнергии <span>3,6&nbsp;руб/кВт</span></p>
										<p>Цена оборудования: <span>1&nbsp;200&nbsp;000 руб</span></p>
										<p>Затраты на&nbsp;эксплуатацию (ТО-1/ТО-5): <br><span>284&nbsp;000 руб</span></p>
										<p>Затраты на&nbsp;электроэнергию (с&nbsp;частотным преобразователем, экономия 30%): <br><span>1&nbsp;890&nbsp;000 руб</span></p>
										<p><span>Экономия на&nbsp;электроэнергии: 810&nbsp;000 руб</span></p>
										<p><span>Итого: 3&nbsp;374&nbsp;000&nbsp;руб.</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="case-item">
						<div class="case-item_title">
							Фермерское хозяйство
							<span class="location">п.Тарасовский</span>
						</div>
						<div class="row">
							<div class="col-sm-5 col-xs-8">
								<div class="case-item_task">
									<div class="case-item_task-title">
										Задача
									</div>
									<div class="case-item_task-text">
										<p>Уложиться в&nbsp;бюджет, недорогое и&nbsp;надежное решение, быстрый срок поставки</p>
									</div>
								</div>
								<div class="case-item_task">
									<div class="case-item_task-title">
										Решение
									</div>
									<div class="case-item_task-text">
										<p>
											Винтовой компрессор Berg BK37 (Прямой привод)&nbsp;&mdash; <br><span>430&nbsp;000 руб</span>
										</p>
										<p><span>Итого: 430&nbsp;000 руб</span></p>
										<p><span>Срок поставки&nbsp;&mdash; 2&nbsp;дня</span></p>
									</div>
								</div>
							</div>
							<div class="col-sm-2 col-xs-4">
								<div class="gallery-item eq3">
									<a href="img/case/3/1.jpg" data-fancybox="case3"><img src="img/case/3/1-thumb.jpg" alt=""></a>
								</div>
							</div>
							<div class="col-sm-5 col-xs-12">
								<div class="case-item_five eq3">
									<div class="case-item_five-title">
										Стоимость владения сроком на&nbsp;5&nbsp;лет
									</div>
									<div class="case-item_five-text">
										<p>С&nbsp;учетом 8-ми часового рабочего дня и&nbsp;стоимости электроэнергии <span>3,6&nbsp;руб/кВт</span></p>
										<p>Цена оборудования: <span>430&nbsp;000 руб</span></p>
										<p>Затраты на&nbsp;эксплуатацию (ТО-1/ТО-5): <br><span>101&nbsp;160 руб</span></p>
										<p>Затраты на&nbsp;электроэнергию: <span>1&nbsp;332&nbsp;000 руб</span></p>
										<p><span>Итого: 1&nbsp;863&nbsp;160 руб</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="form">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Подберем лучше решение цена-качество-срок <br>и рассчитаем совокупные издержки владения:</h2>
				</div>
				<div class="col-md-10 col-xs-12 col-md-push-1">
					<div class="bullits">
						<div class="bullit-item">
							<span class="icon"><img src="img/f1.png" alt=""></span>
							<div class="title">Стоимость и амортизация <br>оборудования</div>
						</div>
						<div class="bullit-item">
							<span class="icon"><img src="img/f2.png" alt=""></span>
							<div class="title">Затраты на электроэнергию <br>и эксплуатацию</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form_inner">
						<div class="form-wrap">
							<div class="title">
								Подбор и запрос стоимости на <?php echo date('d.m.y'); ?><!--<span class="yagla-data"></span>-->
							</div>
							<form id="form3">
								<input type="hidden" name="leadform" value="Форма после кейсов">
								<div class="row">
									<div class="col-xs-6">
										<div class="input-field">
											<label>Ваш телефон*</label>
											<input type="tel" name="phone">
										</div>
									</div>
									<div class="col-xs-6">
										<div class="textarea-field">
											<label>Марка генератора азота и тех.параметры</label>
											<textarea name="comment"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<button data-attr="ОТПРАВЛЯЕТСЯ..."><span>ОТПРАВИТЬ ЗАЯВКУ</span></button>
										<input type="hidden" name="spam" value="">
									</div>
									<div class="col-xs-6">
										<div class="agreement">
											Нажимая на эту кнопку вы соглашаетесь <br>с <a href="javascript:void(0)" class="modal-btn" data-modal="privacy">политикой конфиденциальности</a>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="info-wrap">
							<span>Звоните бесплатно</span><br>
							<a href="tel:8(800)5513815" class="phone roistat-phone-tel"><span class="roistat-phone-tel">8 800 551 38 15</span></a><br>
							<a href="javascript:void(0)" data-modal="phonecall" class="modal-btn">Заказать обратный звонок</a><br>
							<a href="mailto:zakaz@rosatmos.su" class="mail-link">zakaz@rosatmos.su</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--<section class="feedback">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Отзывы клиентов</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="feedback-slider">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<a href="img/feedback/1.jpg" data-fancybox="feedback"><img src="img/feedback/1.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/feedback/2.jpg" data-fancybox="feedback"><img src="img/feedback/2.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/feedback/3.jpg" data-fancybox="feedback"><img src="img/feedback/3.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/feedback/4.jpg" data-fancybox="feedback"><img src="img/feedback/4.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/feedback/5.jpg" data-fancybox="feedback"><img src="img/feedback/5.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/feedback/6.jpg" data-fancybox="feedback"><img src="img/feedback/6.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/feedback/1.jpg" data-fancybox="feedback"><img src="img/feedback/1.jpg" alt=""></a>
								</div>
							</div>
						</div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<section class="sertificates">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Официальный представитель 15-ти производителей</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="serts-slider">
						<div class="swiper-container">
							<div class="swiper-wrapper">
							<div class="swiper-slide">
									<a href="img/serts/remeza.jpg" data-fancybox="serts"><img src="img/serts/remeza-min.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/serts/Berg.jpg" data-fancybox="serts"><img src="img/serts/Berg-thumb.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/serts/РКЗ_001.jpg" data-fancybox="serts"><img src="img/serts/2-thumb.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/serts/Fini.jpg" data-fancybox="serts"><img src="img/serts/3-thumb.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/serts/Fubag.jpg" data-fancybox="serts"><img src="img/serts/4-thumb.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/serts/Comaro.jpg" data-fancybox="serts"><img src="img/serts/5-thumb.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/serts/Арсмаш_001.jpg" data-fancybox="serts"><img src="img/serts/6-thumb.jpg" alt=""></a>
								</div>

								<div class="swiper-slide">
									<a href="img/serts/Abac.jpg" data-fancybox="serts"><img src="img/serts/Abac-thumb.jpg" alt=""></a>
								</div>

								<div class="swiper-slide">
									<a href="img/serts/ATS.jpg" data-fancybox="serts"><img src="img/serts/ATS-thumb.jpg" alt=""></a>
								</div>

								<div class="swiper-slide">
									<a href="img/serts/Comprag_001.jpg" data-fancybox="serts"><img src="img/serts/Comprag-thumb.jpg" alt=""></a>
								</div>

								<div class="swiper-slide">
									<a href="img/serts/Contracor_001.jpg" data-fancybox="serts"><img src="img/serts/Contracor-thumb.jpg" alt=""></a>
								</div>

								<div class="swiper-slide">
									<a href="img/serts/Dali-Crossair_001.jpg" data-fancybox="serts"><img src="img/serts/Dali-thumb.jpg" alt=""></a>
								</div>

								<div class="swiper-slide">
									<a href="img/serts/Kraftmann.jpg" data-fancybox="serts"><img src="img/serts/Kraftmann-thumb.jpg" alt=""></a>
								</div>
								<div class="swiper-slide">
									<a href="img/serts/Dalgakiran.jpg" data-fancybox="serts"><img src="img/serts/Dalgakiran-thumb.jpg" alt=""></a>
								</div>

								<div class="swiper-slide">
									<a href="img/serts/MMZ.jpg" data-fancybox="serts"><img src="img/serts/MMZ-thumb.jpg" alt=""></a>
								</div>

							</div>
						</div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="last-form">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="form_inner">
						<div class="form-wrap">
							<div class="title">
								Подбор и запрос стоимости на <?php echo date('d.m.y'); ?><!--<span class="yagla-data"></span>-->
							</div>
							<form id="form4">
								<input type="hidden" name="leadform" value="Форма после кейсов">
								<div class="row">
									<div class="col-xs-6">
										<div class="input-field">
											<label>Ваш телефон*</label>
											<input type="tel" name="phone">
										</div>
									</div>
									<div class="col-xs-6">
										<div class="textarea-field">
											<label>Марка генератора азота и тех.параметры</label>
											<textarea name="comment"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<button data-attr="ОТПРАВЛЯЕТСЯ..."><span>ОТПРАВИТЬ ЗАЯВКУ</span></button>
										<input type="hidden" name="spam" value="">
									</div>
									<div class="col-xs-6">
										<div class="agreement">
											Нажимая на эту кнопку вы соглашаетесь <br>с <a href="javascript:void(0)" class="modal-btn" data-modal="privacy">политикой конфиденциальности</a>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="info-wrap">
							<span>Звоните бесплатно</span><br>
							<a href="tel:8(800)5513815" class="phone roistat-phone-tel"><span class="roistat-phone-tel">8 800 551 38 15</span></a><br>
							<a href="javascript:void(0)" data-modal="phonecall" class="modal-btn">Заказать обратный звонок</a><br>
							<a href="mailto:zakaz@rosatmos.su" class="mail-link">zakaz@rosatmos.su</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="dev">
						Промышленный маркетинг от <a href="https://promo.bz" target="_blank">PROMO.BZ</a>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="doc-link">
						<a href="javascript:void(0)" class="modal-btn" data-modal="privacy">Политика конфиденциальности</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="rekvisit">
						© 2020  ООО "Русатмос", ИНН 6161087518, ОГРН 1196196014904 <br>г. Ростов-на-Дону, Проспект Космонавтов, д. 35/20б оф.15
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--Modals-->
	<div class="modal phonecall">
		<div class="container">
			<div class="col-xs-10 col-sm-6 col-md-5">
				<div class="modal-wrap">
					<div class="title">Заказать обратный звонок</div>
					<form class="ajax-form" id="form5">
						<input type="hidden" name="leadform" value="Обратный звонок">
						<div class="input-field">
							<label>Ваш телефон*</label>
							<input type="tel" name="phone">
						</div>
						<button data-attr="ОТПРАВЛЯЕТСЯ..."><span>Перезвоните мне</span></button>
						<input type="hidden" name="spam" value="">	
						<div class="agreement">
							Нажимая на эту кнопку вы соглашаетесь <br>с <a href="javascript:void(0)" class="modal-btn" data-modal="privacy">политикой конфиденциальности</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="close2"></div>
	</div>
	<div class="modal price">
		<div class="container">
			<div class="col-xs-10 col-sm-6 col-md-5">
				<div class="modal-wrap">
					<div class="title">Запрос прайса</div>
					<form class="ajax-form" id="form6">
						<input type="hidden" name="leadform" value="Запрос прайса">
						<input type="hidden" name="price" value="">
						<div class="input-field">
							<label>Ваше имя</label>
							<input type="text" name="name">
						</div>
						<div class="input-field">
							<label>Ваш телефон*</label>
							<input type="tel" name="phone">
						</div>
						<button data-attr="ОТПРАВЛЯЕТСЯ..."><span>>Получить прайс</span></button>
						<input type="hidden" name="spam" value="">	
						<div class="agreement">
							Нажимая на эту кнопку вы соглашаетесь <br>с <a href="javascript:void(0)" class="modal-btn" data-modal="privacy">политикой конфиденциальности</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="close2"></div>
	</div>
	<div class="modal privacy">
		<div class="container">
			<div class="col-xs-10 col-sm-12">
				<div class="modal-wrap">
					<div class="title">Политика конфиденциальности</div>
					<div class="text">
						<p>Компания «РосАтмос» уважает ваше право и соблюдает конфиденциальность при заполнении, передачи и хранении ваших конфиденциальных сведений.</p>
						<p>Размещение заявки на сайте rosatmos.su означает ваше согласие
						на обработку данных и дальнейшей передачи ваших контактных данных компании «РосАтмос». Под персональными данными подразумевается информация, относящаяся к субъекту персональных данных, в частности имя, контактные реквизиты (номер телефона) и иные данные, относимые Федеральным законом от 27 июля 2006 года № 152-ФЗ «О персональных данных» к категории персональных данных.</p>
						<p>Целью обработки персональных данных является осуществление компанией «РосАтмос» оказания услуг профессиональной настройки и ведения рекламы, создания сайтов и поискового продвижения, а также информирование об акциях компании «РосАтмос».</p>
						<p class="agree">
							Я согласен(а) с условиями предоставления услуги и готов(а) получать SMS-рассылку и Email-рассылку от компанией «РосАтмос».
						</p>
						<p>По первому требованию вы перестанете получать данные уведомления.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="close2"></div>
	</div>
	<!---->
	<!--Script-->
	<script src="js/scripts.min.js" ></script>
	<!---->

<script>
	document.addEventListener('DOMContentLoaded', function() {
	var now = new Date();
	
	var dd = now.getDate();
	if (dd < 10) dd = '0' + dd;

	var mm = now.getMonth() + 1;
	if (mm < 10) mm = '0' + mm;

	var yy = now.getFullYear() % 100;
	if (yy < 10) yy = '0' + yy;

	var date = dd + '.' + mm + '.' + yy;
	setTimeout(function() {

		document.querySelectorAll('.yagla-data').forEach(function(elem) {
		
		elem.innerHTML = date;
	});

}, 1000);
	
});
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   var z = null;m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(90026788, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90026788" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171534809-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171534809-1');
</script>
<script>(function(w, d, s, h, id) { w.roistatProjectId = id; w.roistatHost = h; var p = d.location.protocol == "https:" ? "https://" : "http://"; var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init?referrer="+encodeURIComponent(d.location.href); var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);})(window, document, 'script', 'cloud.roistat.com', '21b8bcb16c8efed294c36292a759747b');</script>
<script>
window.onRoistatAllModulesLoaded = function() {
window.roistat.leadHunter.onAfterSubmit = function(leadData) {
ym(90026788, 'reachGoal', 'LEADHUNTER');
}
};
</script>
</body>
</html>