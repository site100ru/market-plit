<?php
	session_start();
	$win = "true";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mes = $_POST['mes'];

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "From: info@market-plit.ru\r\n";
	$headers .= "Reply-To: info@market-plit.ru\r\n";
	$headers .= "Return-Path: info@market-plit.ru\r\n";
	$headers .= "Content-type: text/plain; charset=utf-8\r\n";

	mail("7928283@mail.ru, vasilyev-r@mail.ru", "Вопрос с сайта «Плитный Маркет»", "
		Клиент: ".$name."\n
		Email: ".$email."\n
		Вопрос: ".$mes."\n
	", $headers );
	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Плитный&nbsp;Маркет». В&#160;ближайшее время с Вами свяжется наш специалист.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>