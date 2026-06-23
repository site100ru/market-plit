<?php
	session_start();
	$win = "true";
	// Если существует переменная POST, то
	
	/*
	if($_POST){
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		print_r( $Return );
		
		/* Принимаем данные обратно
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > 1 ){ */
			
			$name = $_POST['name'];
			$tel = $_POST['tel'];

			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "From: info@market-plit.ru\r\n";
			$headers .= "Reply-To: info@market-plit.ru\r\n";
			$headers .= "Return-Path: info@market-plit.ru\r\n";
			$headers .= "Content-type: text/plain; charset=utf-8\r\n";

			if ( isset( $_POST['shtory-order'] ) ) {
				mail( "sidorov-vv3@mail.ru, vasilyev-r@mail.ru", "Заявка с сайта «Плитный Маркет»", "
					Клиент: " . $name ."\n
					Телефон: " . $tel ."\n
					Заявка со страницы штор.", $headers
				);
			} else {
				mail( "vasilyev-r@mail.ru", "Заявка с сайта «Плитный Маркет»", "
					Клиент: " . $name ."\n
					Телефон: " . $tel, $headers
				);
			}
				
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Плитный&nbsp;Маркет». В&#160;ближайшее время с Вами свяжется наш специалист.</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		
		/*} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	} */
?>