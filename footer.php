<!-- Contacts -->
<section class="contacts-section">
	<div class="container py-5">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-12 pt-2 pb-4">
				<nav id="contacts-menu-1" class="navbar-light">
					<!-- Desktop version -->
					<div class="row h-100 justify-content-center align-items-center d-none d-lg-flex">
						<div class="col-2">
							<a href="/">
								<img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png" class="img-fluid">
							</a>
						</div>
						<div class="col-lg-7 col-xxl-6">
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
								<li class="nav-item d-inline-block">
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
						<div class="col-lg-3 text-end col-xxl-2">
							<a href="tel:+79037928283" class="contacts-phone"> 8 <span>(903)</span> 792-82-83</a>
						</div>
					</div>
					<!-- End Desktop version -->
					
					<!-- Mobail version -->
					<div class="row d-lg-none">
						<div class="col-12 mb-4">
							<a href="#">
								<img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png" class="img-fluid">
							</a>
						</div>
						<div class="col-12">
							<ul class="nav mb-2">
								<li class="nav-item d-inline-block">
									<a href="#" class="nav-link ps-0">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.png">
										<span>Офис/Склад/Произ-во: гор. Химки, Вашутинское ш., стр. 13</span>
									</a>
								</li>
								<li class="nav-item d-inline-block">
									<a href="#" class="nav-link ps-0">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png">
										<span>Пн-Пт: 9:00-18:00, Сб-Вс: Online</span>
									</a>
								</li>
								<li class="nav-item d-inline-block">
									<a href="mailto:7928283@mail.ru" class="nav-link ps-0">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png">
										<span>7928283@mail.ru</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-12">
							<a href="tel:+79037928283" class="contacts-phone"> 8 <span>(903)</span> 792-82-83</a>
						</div>
					</div>
					<!-- END Mobail version -->
				</nav>
			</div>
		</div>
		
		
		<div class="row d-none d-lg-block">
			<div class="col-md-12">
				<nav id="contacts-menu-2" class="navbar navbar-expand-xl navbar-light mb-3">
					<div class="collapse navbar-collapse">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '
									<ul id="%1$s" class="navbar-nav m-auto mb-2 mb-lg-0 %2$s">%3$s
										<!-- Mobile menu --
										<li class="nav-item d-xl-none">
											<a class="nav-link active" href="" data-bs-toggle="modal" data-bs-target="#measurerModal">Бесплатный вызов замерщика</a>
										</li>
										<li class="nav-item d-xl-none">
											<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
												<img src="https://unistyle-spb.ru/wp-content/themes/unistyle-spb/img/ico/location.webp" style="width: 10px;" class="me-1">Санкт-Петербург
											</div>
											<a class="nav-link top-menu-tel pt-1 pb-0" href="tel:+79037928283">+7 (903) 792-82-83</a>
											<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
												<img src="https://unistyle-spb.ru/wp-content/themes/unistyle-spb/img/ico/clock-ico.webp" style="width: 10px; position: relative; top: -1px;" class="me-1">Ежедневно с 9:00 до 21:00
											</div>
										</li>
										<li class="nav-item d-xl-none pt-3">
											<a class="ico-button pe-2" href="whatsapp://send?phone=+79632425462"><img src="'.get_template_directory_uri().'/img/ico/whatsapp-ico.svg"></a>
											<a class="ico-button pe-2" href="tg://resolve?domain=Plitniy_Market"><img src="'.get_template_directory_uri().'/img/ico/telegram-ico.svg"></a>
											<!--a class="ico-button pe-2" href="vk.com/stocklinecompany"><img src="img/ico/inst-ico.png"></a-->
											<!--a class="ico-button" href="#"><img src="/img/ico/vk-ico.png"></a-->
										</li>
										<!-- End mobile menu -->
									</ul>
								',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							));
						?>
						
						
						<!--ul class="navbar-nav m-auto mb-2 mb-lg-0">
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
								<a class="nav-link" href="cutting.html">Распил</a>
							</li>
							<li class="nav-item d-none d-xxl-inline">
								<span class="nav-link px-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="payment-and-delivery.html">Оплата доставка возврат</a>
							</li>
							<li class="nav-item d-none d-xxl-inline">
								<span class="nav-link px-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="actions.html">Акции</a>
							</li>
							<li class="nav-item d-none d-xxl-inline">
								<span class="nav-link px-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png"></span>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="articles.html">Статьи и новости</a>
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
							<li class="nav-item d-xl-none mb-2">
								<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
								<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
								<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
								<a class="ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
							</li>
							<!-- End mobile menu --
						</ul-->
					</div>
				</nav>
			</div>
		</div>
		
		
		
		<div class="row justify-content-center pt-3">
			<div class="col-md-8">
				<ul class="nav justify-content-md-center mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link ico-button px-0" href="whatsapp://send?phone=+79037928283"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button pe-0" href="tg://resolve?domain=Plitniy_Market"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button pe-0" href="viber://chat?number=79037928283"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/viber-circle-ico.svg"></a>
					</li>
					<!--li class="nav-item">
						<a class="nav-link ico-button" href="https://vk.com/stocklinecompany"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
					</li-->
				</ul>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-lg-8 pt-4 pt-lg-2">
				<div class="row d-lg-none justify-content-center">
					<div class="col-6 left-col-footer-menu">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '<ul id="menu-main-menu-2" class="navbar-nav ms-auto mb-lg-0 %2$s">%3$s</ul>',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							));
						?>
					</div>
					<div class="col-6 right-col-footer-menu">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '<ul id="menu-main-menu-3" class="navbar-nav ms-auto mb-lg-0 %2$s">%3$s</ul>',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							));
						?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- container -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div id="company-in-footer">©2023 «Плитный Маркет»</div>
					<div id="im-in-footer">Создание и продвижение сайтов: <a href="https://сайт100.рф" class="text-light">сайт100.рф</a></div>
				</div>
			</div>
		</div>
	</footer>
</section>
<!-- /Contacts -->


<!-- Callback button HTML -->
<div class="callback-button-wrapper">
	<div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
		<div id="btnIco" class="callback-button-ico"></div>
	</div>
	
	<div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
		<a data-bs-toggle="modal" data-bs-target="#callbackButtonModal"><div class="callback-form-button-ico"></div></a>
	</div>
	<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
		<a href="tel:+79037928283"><div class="callback-phone-button-ico"></div></a>
	</div>
	<div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
		<a href="whatsapp://send?phone=+79037928283"><div class="callback-whatsapp-button-ico"></div></a>
	</div>
	<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
		<a href="tg://resolve?domain=Plitniy_Market"><div class="callback-telegram-button-ico"></div></a>
	</div>
</div>
<!-- /Callback button HTML -->


<!-- Callback button JS -->
<script>
	function callbackButtonClick() {
		
		let formBtn = document.getElementById('formBtn').style.top;
		
		
		if ( formBtn == "0px" || formBtn == 0 ) {
			document.getElementById('callbackBtn').style.animation = "none";
			document.getElementById('btnIco').style.animation = "change2 linear .5s";
			document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
			document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
			
			document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
			document.getElementById('btnIco').style.transform = "rotate(180deg)";
			
			
			document.getElementById('btnIco').style.backgroundImage = "url(https://market-plit.ru/wp-content/themes/site100-lumber/img/ico/callback-button-close.png)";
			document.getElementById('btnIco').style.backgroundPosition = "center";
			document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
			
			document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
			document.getElementById('btnIco').style.backgroundSize = "cover";
			
			
			document.getElementById('formBtn').style.top = "-60px";
			document.getElementById('formBtn').style.opacity = "1";
			
			document.getElementById('phoneBtn').style.top = "-120px";
			document.getElementById('phoneBtn').style.opacity = "1";
			
			document.getElementById('whatsappBtn').style.top = "-180px";
			document.getElementById('whatsappBtn').style.opacity = "1";
			
			document.getElementById('telegramBtn').style.top = "-240px";
			document.getElementById('telegramBtn').style.opacity = "1";
		} else {
			document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
			document.getElementById('btnIco').style.animation = "change linear 16s infinite";
			document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
			document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
			document.getElementById('btnIco').style.transform = "rotate(180deg)";
			document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
			document.getElementById('btnIco').style.backgroundImage = "url(https://market-plit.ru/wp-content/themes/site100-lumber/img/ico/callback-button-ico.png)";
			document.getElementById('btnIco').style.backgroundPosition = "center";
			document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
			
			document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
			document.getElementById('btnIco').style.backgroundSize = "cover";
			
			
			document.getElementById('formBtn').style.top = "0px";
			document.getElementById('formBtn').style.opacity = "0";
			
			document.getElementById('phoneBtn').style.top = "0px";
			document.getElementById('phoneBtn').style.opacity = "0";
			
			document.getElementById('whatsappBtn').style.top = "0px";
			document.getElementById('whatsappBtn').style.opacity = "0";
			
			document.getElementById('telegramBtn').style.top = "0px";
			document.getElementById('telegramBtn').style.opacity = "0";
		}
	}
</script>
<!-- /Callback button JS -->
		
		
		<!-- Carousel three on one
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="50000">
			<div id="carouselInnerOne" class="carousel-inner"></div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</a>
		</div> -->
		
		
		
		
		<!-- Callback button -->
		<div class="modal fade" id="callbackButtonModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Обратный звонок</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body py-3 px-3">
						<div class="row">
							<div class="col">
								<p><small>Мы свяжемся с Вами в блажайшее время! Для звонка введите Ваше имя и телефон.</small></p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-8">
								<form method="post" action="https://market-plit.ru/wp-content/themes/site100-lumber/mails/order-mail.php">
									<input name="name" type="text" class="form-control mb-3" placeholder="Ваше имя" aria-label="Recipient's username" aria-describedby="button-addon2">
									<input id="phone-mask-1" name="tel" type="text" class="form-control mb-3 telMask" placeholder="Ваш телефон" aria-label="Recipient's username" aria-describedby="button-addon2" required>
									<div class="text-center">
										<input type="hidden" id="g-recaptcha-response-order" name="g-recaptcha-response">
										<button class="btn btn-corporation-orange text-light btn-corporate-color-1" type="submit" id="button-addon2">Отправить</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Callback button -->
		
	
	
<!-- Callback Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/callback-mail.php" class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<!--div class="row">
					<div class="col">
						<p><small>Мы свяжемся с Вами в удобное для Вас время и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small></p>
					</div>
				</div-->
				<div class="row">
					<div class="col-md-6 mb-3 mb-md-0">
						<input type="text" name="name" class="form-control" placeholder="Ваше имя">
					</div>
					<div class="col-md-6">
						<input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-corporate-color-1 mx-auto">Перезвонить</button>
			</div>
		</form>
	</div>
</div>
<!-- /Callback Modal -->


<!-- Measurer Modal --
<div class="modal fade" id="measurerModal" tabindex="-1" aria-labelledby="measurerModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="callback-mail.php" class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="measurerModalLabel">Вызов замерщика (бесплатно)</h5>
				
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<p><small>Наш специалист приедет в удобное для Вас время, произведет замеры, ознакомит с продукцией и материалами, проконсультирует по всем вопросам! Для связи с замерщиком введите Ваше имя и телефон.</small></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<input type="text" name="name" class="form-control" placeholder="Ваше имя">
					</div>
					<div class="col-md-6 mb-3">
						<input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*">
					</div>
					<div class="col-12 mb-3">
						<input type="text" name="tel" class="form-control" placeholder="Адрес объекта*">
					</div>
					<div class="col-12 mb-3">
						<textarea type="text" name="mes" class="form-control" placeholder="Дополнительная информация"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<p class="mb-0">
							<img src="img/ico/advantage-1.png" class="me-1" style="width: 25px;">
							<small>Изготовление 2-5 дней!</small>
						</p>
					</div>
					<div class="col-6">
						<p class="mb-0">
							<img src="img/ico/advantage-3.png" class="me-1" style="width: 20px;">
							<small>Гарантия 2 года!</small>
						</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-orange mx-auto">Вызвать</button>
			</div>
		</form>
	</div>
</div>
<!-- /Measurer Modall -->


<!-- Message Modal --
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="callback-mail.php" class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="messageModalLabel">Задать вопрос</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6 mb-3">
						<input type="text" name="name" class="form-control" placeholder="Ваше имя">
					</div>
					<div class="col-md-6 mb-3">
						<input type="text" name="email" class="form-control" placeholder="Ваш email*">
					</div>
					<div class="col-12">
						<textarea type="text" name="mes" class="form-control" placeholder="Ваш вопрос*"></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-orange mx-auto">Отправить</button>
			</div>
		</form>
	</div>
</div>
<!-- /Message Modal -->


<!-- Показываем сообщение об успешной отправки -->
<div style="display: <?php echo $_SESSION['display'] ?>;" onclick="modalClose();">
	<div id="background-msg" style="display: <?php echo $_SESSION['display'] ?>;"></div>
	<button id="btn-close" type="button" class="btn-close btn-close-white" onclick="modalClose();" style="position: absolute; z-index: 9999; top: 15px; right: 15px;"></button>
	<div id="message">
		<?php echo $_SESSION['recaptcha']; unset( $_SESSION['recaptcha'] ); ?>
	</div> 
</div>


<?php wp_footer(); ?>


<!-- Bootstarp JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>

<!-- Main scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<!-- Telephone number mask -->
<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
<script>
	var telMask = document.getElementsByClassName("telMask");
	var im = new Inputmask("+7(999)999-99-99");
	im.mask(telMask);
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(93637636, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/93637636" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</body>
</html>