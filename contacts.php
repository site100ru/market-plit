<?
	
	// Template Name: Contacts
	// Template Post Type: page

	get_header();
	
?>


<!-- Header -->
<header class="second-header">
	<div class="parallax" <?php choose_background(); ?>></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1><?php the_title(); ?></h1>
				<!--p class="header-description"></p-->
			</div>
		</div>
	</div>
</header>
<!-- /Header -->
		
		
<!-- Payment shipping and returns section -->
<section class="bg-white">
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-4 py-5">
				<ul style="list-style: none; padding-left: 0;">
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.png">
						</div>
						<div class="float-right">
							<span>Офис/склад/произв-во:</span> гор. Химки, Вашутинское шоссе, 13
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png">
						</div>
						<div class="float-right">
							<span>Время работы:</span> Пн-Пт с 9.00-18.00. Сб-Вс заказы принимаются на электронную почту.
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/phone-ico.png">
						</div>
						<div class="float-right">
							<span>Телефон:</span> 8 (495) 792-82-83
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/phone-ico.png">
						</div>
						<div class="float-right">
							<span>Телефон:</span> 8 (903) 792-82-83
						</div>
						<div style="clear: both;"></div>
					</li>
				</ul>
			</div>
			<div class="col-md-4 py-5">
				<ul style="list-style: none; padding-left: 0;">
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-contacts-ico.png">
						</div>
						<div class="float-right">
							<span>WhatsApp:</span> 8 (903) 792-82-83
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-contacts-ico.png">
						</div>
						<div class="float-right">
							<span>Telegram:</span> @Plitniy_Market
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/viber-ico.svg">
						</div>
						<div class="float-right">
							<span>Viber:</span> 8 (903) 792-82-83
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png">
						</div>
						<div class="float-right">
							<span>Email:</span> 7928283@mail.ru
						</div>
						<div style="clear: both;"></div>
					</li>
				</ul>
			</div>
			<!--div class="col-md-4 py-5">
				<ul style="list-style: none; padding-left: 0;">
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/commercia-ico.png">
						</div>
						<div class="float-right">
							<span>Наименование организации:</span> Общество с ограниченной ответственностью «СТОКЛАЙН»
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/commercia-ico.png">
						</div>
						<div class="float-right">
							<span>ИНН:</span> 5040158402
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/commercia-ico.png">
						</div>
						<div class="float-right">
							<span>КПП:</span> 504001001
						</div>
						<div style="clear: both;"></div>
					</li>
					<li class="nav-item mb-3 me-3 text-dark">
						<div class="float-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/commercia-ico.png">
						</div>
						<div class="float-right">
							<span>ОГРН:</span> 1185027024643
						</div>
						<div style="clear: both;"></div>
					</li>
				</ul>
			</div-->
		</div>
		<div class="row">
			<div class="col">
				<div id="map"></div>
			</div>
		</div>
	</div>
</section>
<!-- /Payment shipping and returns section -->


<!-- API Yandex Map -->
<script src="https://api-maps.yandex.ru/2.1/?apikey=7a322092-0e89-4de6-8bff-0a1795b5548e&lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
	// Функция ymaps.ready() будет вызвана, когда
	// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
	ymaps.ready(init);
	/* На разную ширину экрана разное приближение карты */
	var screenWidth = document.documentElement.clientWidth;
	if ( screenWidth > 1000 ) {
		var zoom = 10;
	} else {
		var zoom = 9;
	}
	
	function init() {
		// Создание карты.
		var myMap = new ymaps.Map("map", {
			// Координаты центра карты.
			// Порядок по умолчанию: «широта, долгота».
			// Чтобы не определять координаты центра карты вручную,
			// воспользуйтесь инструментом Определение координат.
			center: [55.92358948639752,37.40623791136087], // Map center
			// Уровень масштабирования. Допустимые значения:
			// от 0 (весь мир) до 19.
			zoom: zoom
		});
		var myPlacemark1 = new ymaps.Placemark( [55.92358948639752,37.40623791136087], {}, {
			iconLayout: 'default#image',
			iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png',
			iconImageSize: [50, 50],
			//iconImageOffset: [, 0]
		});
		/*
		var myPlacemark2 = new ymaps.Placemark( [55.817795,37.743301], {}, {
			iconLayout: 'default#image',
			iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/map-logo-point.png',
			//iconImageSize: [0, 0],
			//iconImageOffset: [, 0]
		});
		var myPlacemark3 = new ymaps.Placemark( [55.701273,37.998602], {}, {
			iconLayout: 'default#image',
			iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/map-logo-point.png',
			//iconImageSize: [0, 0],
			//iconImageOffset: [, 0]
		});
		var myPlacemark4 = new ymaps.Placemark( [55.66471,37.89649], {}, {
			iconLayout: 'default#image',
			iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/map-logo-point.png',
			//iconImageSize: [0, 0],
			//iconImageOffset: [, 0]
		});
		var myPlacemark5 = new ymaps.Placemark( [55.895151,37.302893], {}, {
			iconLayout: 'default#image',
			iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/map-logo-point.png',
			//iconImageSize: [0, 0],
			//iconImageOffset: [, 0]
		});*/
		myMap.behaviors.disable('scrollZoom'); // Disable zoom on scroll
		//myMap.behaviors.disable('multiTouch'); // Disable zoom
		//myMap.behaviors.disable('drag'); // Disable drag
		myMap.geoObjects.add(myPlacemark1);
		/*myMap.geoObjects.add(myPlacemark2);
		myMap.geoObjects.add(myPlacemark3);
		myMap.geoObjects.add(myPlacemark4);
		myMap.geoObjects.add(myPlacemark5);*/
	}
</script>


<?php get_footer(); ?>