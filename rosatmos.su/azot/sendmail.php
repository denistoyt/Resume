<?php

	session_start();

	$utm_source = $_SESSION["utm_source"];
	$utm_medium = $_SESSION["utm_medium"];
	$utm_campaign = $_SESSION["utm_campaign"];
	$utm_term = $_SESSION["utm_term"];
	$utm_content = $_SESSION["utm_content"];

	require 'phpmailer/PHPMailerAutoload.php';
	
	$bodytext = 'Новая заявка на сайте';
	$bodytext .= '<br/>';
	$bodytext .= 'Реклама';
	$bodytext .= '<br/>';

	if (isset($_POST['name'])) {
		$bodytext .= "Имя:";
		$bodytext .= '<br/>';
		$bodytext .= $_POST['name'];
		$bodytext .= '<br/>';
	} else {
		$bodytext .= "Имя:";
		$bodytext .= '<br/>';
		$bodytext .= 'Нет имени';
		$bodytext .= '<br/>';
	}
	if (isset($_POST['phone'])) {
		$bodytext .= "Телефон:";
		$bodytext .= '<br/>';
		$bodytext .= $_POST['phone'];
		$bodytext .= '<br/>';
	} else {
		$bodytext .= "Телефон:";
		$bodytext .= '<br/>';
		$bodytext .= 'Нет телефона';
		$bodytext .= '<br/>';
	}
	if (isset($_POST['price'])) {
		$bodytext .= "Прайс:";
		$bodytext .= '<br/>';
		$bodytext .= $_POST['price'];
		$bodytext .= '<br/>';
	} else {
		$bodytext .= "Прайс:";
		$bodytext .= '<br/>';
		$bodytext .= 'Нет прайса';
		$bodytext .= '<br/>';
	}
	if (isset($_POST['comment'])) {
		$bodytext .= "Коммент:";
		$bodytext .= '<br/>';
		$bodytext .= $_POST['comment'];
		$bodytext .= '<br/>';
	} else {
		$bodytext .= "Коммент:";
		$bodytext .= '<br/>';
		$bodytext .= 'нет комментария';
		$bodytext .= '<br/>';
	}
	
	if ($_POST['spam'] != 'stopSpam') exit('Spam decected');

	session_start();
	$utm = '';
	$utm .= 'utm_source:';
	$utm .= '<br/>';
	$utm .= $utm_source;
	$utm .= '<br/>';
	$utm .= 'utm_medium:';
	$utm .= '<br/>';
	$utm .= $utm_medium;
	$utm .= '<br/>';
	$utm .= 'utm_campaign:';
	$utm .= '<br/>';
	$utm .= $utm_campaign;
	$utm .= '<br/>';
	$utm .= 'utm_term:';
	$utm .= '<br/>';
	$utm .= $utm_term;
	$utm .= '<br/>';
	$utm .= 'utm_content:';
	$utm .= '<br/>';
	$utm .= $utm_content;
	$bodytext .= $utm;
	$bodytext .= '<br/>';
	$bodytext .= 'Roistat';
	$bodytext .= '<br/>';
	$bodytext .= $_COOKIE['roistat_visit'];
	$bodytext .= '<br/>';

	$email = new PHPMailer();
	$email->CharSet = 'utf-8';
	$email->From      = 'order@rosatmos.su';
	$email->FromName  = 'RosAtmos LP Azot';
	$email->Subject   = 'Новая заявка на сайте Азот';
	$email->msgHTML($bodytext);
	//$email->Body      = $bodytext;
	//$email->AddAddress( 'info@haydex.ru' );
	$email->AddAddress( 'zakaz@rosatmos.su' );

	$email->Send();
	
	include("amocrm_api.php");


?>