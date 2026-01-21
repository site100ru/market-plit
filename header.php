<?php
	session_start();
	if ( isset( $_SESSION['win'] ) ) {
		unset( $_SESSION['win'] );
		$_SESSION['display'] = "block";
	} else { $_SESSION['display'] = "none"; }
?>
<!doctype html>
<html lang="ru">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="yandex-verification" content="95d213acf1a7f882" />
		<meta name="yandex-verification" content="fa97db861ca555b1" /><!-- New -->
		<meta name="description" content="<?php echo_cat(); ?>" />
		<meta property="og:description" content="<?php echo_cat(); ?>" />
		<meta name="keywords" content="фанера, фанера ФСФ, фанера ФК, ОСБ-плиты, МДФ-плиты, Москва, Химки, Люберцы, Реутов" />
		<meta property="og:locale" content="ru_RU" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
		<meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />
		
		<?php wp_head(); ?>
		
		<!-- Bootstrap CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

		<!-- Theme CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">
		
		<!-- Style CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
		
		<link rel="icon" href="https://market-plit.ru/wp-content/themes/site100-lumber/favicon.ico" type="image/x-icon">
		
		<title><?php echo wp_get_document_title(); ?></title>
	</head>
	<body>

		<nav id="top-menu-1" class="navbar-light d-none d-xl-block bg-white">
			<div class="container">
				<div class="row h-100 align-items-center">
					<div class="col-2">
						<a href="/">
							<img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png">
						</a>
					</div>
					<div class="col-5 col-xxl-6">
						<ul class="nav justify-content-end align-items-center">
							<li class="nav-item d-inline-block">
								<a href="https://market-plit.ru/контакты/" class="nav-link">
									<div class="row align-items-center">
										<div class="col-2">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.png">
										</div>
										<div class="col-10 ps-1">
											<span>Офис / Склад / Произ-во<br>гор. Химки,<br>Вашутинское ш., стр. 13</span>
										</div>
									</div>
								</a>
							</li>
							<li class="nav-item d-inline-block">
								<a href="https://market-plit.ru/контакты/" class="nav-link">
									<div class="row align-items-center">
										<div class="col-2">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png">
										</div>
										<div class="col-10 ps-3">
											<span>Пн-Пт: 9:00-18:00<br>Сб-Вс: Online</span>
										</div>
									</div>
								</a>
							</li>
							<li class="nav-item d-none d-xxl-inline-block">
								<a href="mailto:7928283@mail.ru" class="nav-link">
									<div class="row align-items-center">
										<div class="col-2">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png">
										</div>
										<div class="col-10 ps-3">
											<span>7928283@mail.ru</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-3 col-xxl-2">
						<a class="ico-button pe-1" href="whatsapp://send?phone=+79037928283"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
						<a class="ico-button pe-1" href="tg://resolve?domain=Plitniy_Market"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
						<a class="ico-button pe-1" href="viber://chat?number=79037928283"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/viber-circle-ico.svg"></a>
						<!--a class="ico-button" href="https://vk.com/stocklinecompany"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a-->
					</div>
					<div class="col-2 text-end">
						<a href="tel:+79037928283" class="header-phone"> 8 <span>(903)</span> 792-82-83</a>
						<a href="#" class="header-callback" data-bs-toggle="modal" data-bs-target="#callbackModal"> Обратный звонок </a>
					</div>
				</div>
			</div>
		</nav>
		<nav id="top-menu-2" class="navbar navbar-expand-xl navbar-light">
			<div class="container">
				<a class="navbar-brand d-xl-none" href="#">
					<img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="main-menu"><!-- #navbarSupportedContent2 -->
					<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '
								<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<li class="nav-item d-xl-none pt-3">
										<a class="ico-button pe-2" href="whatsapp://send?phone=+79037928283"><img src="'.get_template_directory_uri().'/img/ico/whatsapp-ico.png"></a>
										<a class="ico-button pe-2" href="tg://resolve?domain=Plitniy_Market"><img src="'.get_template_directory_uri().'/img/ico/telegram-ico.png"></a>
										<a class="ico-button pe-2" href="viber://chat?number=79037928283"><img src="'.get_template_directory_uri().'/img/ico/viber-circle-ico.svg"></a>
										<!--a class="ico-button" href="https://vk.com/stocklinecompany"><img src="'.get_template_directory_uri().'/img/ico/vk-ico.png"></a-->
									</li>
									<!-- End mobile menu -->
								</ul>
							',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
					?>
					<!--ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/">Главная</a>
						</li>
						<li class="nav-item d-none d-xxl-inline">
							<span class="nav-link px-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="catalog">Ассортимент и цены</a>
						</li>
						<!--li class="nav-item d-none d-xxl-inline">
							<span class="nav-link px-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">Распил</a>
						</li>
						<li class="nav-item d-none d-xxl-inline">
							<span class="nav-link px-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">Оплата доставка возврат</a>
						</li>
						<li class="nav-item d-none d-xxl-inline">
							<span class="nav-link px-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">Акции</a>
						</li>
						<li class="nav-item d-none d-xxl-inline">
							<span class="nav-link px-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">Статьи и новости</a>
						</li>
						<li class="nav-item d-none d-xxl-inline">
							<span class="nav-link px-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contacts.html">Контакты</a>
						</li-->
						<!-- Mobile menu --
						<li class="nav-item d-xl-none">
							<a class="nav-link" href="tel:‪89037512663">8 <span>(903)</span> 751-26-63</a>
						</li>
						<li class="nav-item d-xl-none">
							<a class="nav-link" href="#‬">‪Обратный звонок‬</a>
						</li>
						<!--li class="nav-item d-xl-none mb-2">
							<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
							<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
							<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
							<a class="ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
						</li-->
						<!-- End mobile menu --
					</ul-->
					<div class="row align-items-center text-xl-end">
						<!--div class="col-4 col-md-2 col-xl-9">
							<a href="cart.html" style="text-decoration: none;"><div class="cart-quantity-products">25 товаров</div></a>
							<a href="cart.html" style="text-decoration: none;"><div class="cart-total-price">на 250 000 руб</div></a>
						</div>
						<div class="col-3 col-md-2 col-xl-3">
							<a href="cart.html"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/cart-ico.png" style="position: relative; right: 8px;"></a>
						</div-->
						<div class="col">
							<?php woocommerce_mini_cart(); ?>
						</div>
					</div>
				</div>
			</div>
		</nav>