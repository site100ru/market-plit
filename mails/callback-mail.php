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
			
			$name     = $_POST['name'];	
			$phone    = $_POST['phone'];
			$to       = '7928283@mail.ru, vasilyev-r@mail.ru';
			$subject  = 'Заказ обратного звонка с сайта «Плитный Маркет»';
			$message  = "Клиент: " . $name ."\n";
			$message .= "Телефон: " . $phone ."\n";
			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "From: info@market-plit.ru\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			
			/* Проверям что заполнено поле с телефоном */
			if ( $_POST['phone'] ) {
				// Если поле с телефоно заполненно
				mail( $to, $subject, $message, $headers);
				
				$_SESSION['win'] = 1;
				$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Плитный&nbsp;Маркет». В&#160;ближайшее время с Вами свяжется наш специалист.</p>';
				header("Location: ".$_SERVER['HTTP_REFERER']);
			} else {
				// Если поле с телефоно НЕ заполненно
				$_SESSION['win'] = 1;
				$_SESSION['recaptcha'] = '<p class="text-light">Обязательное поле с номером телефона не заполненно! Пожалуйста, повторите попытку и заполенте поле с номером телефона.</p>';
				header("Location: ".$_SERVER['HTTP_REFERER']);
			}
			
		
		/*} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	} */
?>