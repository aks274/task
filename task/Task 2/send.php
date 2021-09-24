<?php
if (isset($_POST)) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$mail = $_POST['mail'];
	$product = $_POST['product'];
}
$message = "Имя: ".$name."\r\n"."Телефон: ".$phone."\r\n"."Почта: ".$mail."\r\n"."Товар: ".$product;
mail('aks274@ya.ru','Order', $message);
?>