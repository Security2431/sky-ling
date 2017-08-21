<?php
require 'libs/PHPMailer/PHPMailerAutoload.php';

$test_res = 0;

if ($_POST['vopros-1'] === "b") $test_res++;
if ($_POST['vopros-2'] === "b") $test_res++;
if ($_POST['vopros-3'] === "b") $test_res++;
if ($_POST['vopros-4'] === "b") $test_res++;
if ($_POST['vopros-5'] === "a") $test_res++;
if ($_POST['vopros-6'] === "a") $test_res++;
if ($_POST['vopros-7'] === "a") $test_res++;
if ($_POST['vopros-8'] === "c") $test_res++;
if ($_POST['vopros-9'] === "a") $test_res++;
if ($_POST['vopros-10'] === "d") $test_res++;

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;";

$headers .= "From: Название <refox@ukr.net>\r\n";

$subject = "Результаты теста";

$from = "skyling.onschool@gmail.com', 'Sky-ling. Школа английского";

$to = trim($_POST['Email']);     // Add a recipient


$message = '
<p>Здравствуйте, спасибо что прошли тест на нашем сайте! Отправляем вам результаты тестирования и подарочные статьи, которые содержат в себе полезные рекомендации для самостоятельной проработки!
<br>
Наши контакты: skyling.onschool@gmail.com, http://sky-ling.com/</p>
<tr style="background-color: #f8f8f8;">
	<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Результат вашего тестирования:</b></td>
	<td style="padding: 10px; border: #e9e9e9 1px solid;">' .$test_res . ' правильных ответов.</td>
	<td style="padding: 10px; border: #e9e9e9 1px solid;">Как и обещали, прикрепляем статьи в подарок.</td>
</tr>';

mail($to, $subject, $message, $headers);
/*
if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent';
}
*/
