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

$headers = "From: Sky-ling. Школа английского. <skyling.onschool@gmail.com>\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8";

$headers .= "From: Название <refox@ukr.net>\r\n";

$subject = "Результаты теста";

$from = "skyling.onschool@gmail.com', 'Sky-ling. Школа английского";

$to = trim($_POST['Email']);     // Add a recipient

$message = '
<p style="color: #000000;">Здравствуйте, спасибо что прошли тест на нашем сайте! 
<br>Отправляем вам результаты тестирования и подарочные статьи, которые содержат в себе полезные рекомендации для самостоятельной проработки!
<br></p>
<tr style="background-color: #f8f8f8;">
	<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Результат вашего тестирования:</b></td>
	<td style="padding: 10px; border: #e9e9e9 1px solid;">' .$test_res . ' правильных ответов.</td>
</tr>

<p>
Как и обещали, прикрепляем статьи в подарок:
<br>
https://goo.gl/RMzjaQ - 6 советов по изучению английских слов
<br>
https://goo.gl/oqjSJB - DO vs Make
<br>
https://goo.gl/AZb6bs - Чтение и выполнение задания
<br>
<br>
Наши контакты: 
<br>
skyling.onschool@gmail.com, 
<br>
http://sky-ling.com/ </p>
';
mail($to, $subject, $message, $headers);
/*
if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent';
}
*/
