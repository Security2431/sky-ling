<?php
require 'libs/PHPMailer/PHPMailerAutoload.php';

$test_res = 0;

if ($_POST['vopros-1'] === "a") $test_res++;
if ($_POST['vopros-2'] === "b") $test_res++;
if ($_POST['vopros-3'] === "b") $test_res++;
if ($_POST['vopros-4'] === "b") $test_res++;
if ($_POST['vopros-5'] === "c") $test_res++;
if ($_POST['vopros-6'] === "b") $test_res++;
if ($_POST['vopros-7'] === "c") $test_res++;
if ($_POST['vopros-8'] === "a") $test_res++;
if ($_POST['vopros-9'] === "a") $test_res++;
if ($_POST['vopros-10'] === "c") $test_res++;
if ($_POST['vopros-11'] === "b") $test_res++;
if ($_POST['vopros-12'] === "b") $test_res++;
if ($_POST['vopros-13'] === "b") $test_res++;
if ($_POST['vopros-14'] === "a") $test_res++;
if ($_POST['vopros-15'] === "a") $test_res++;
if ($_POST['vopros-16'] === "c") $test_res++;
if ($_POST['vopros-17'] === "c") $test_res++;
if ($_POST['vopros-18'] === "a") $test_res++;
if ($_POST['vopros-19'] === "b") $test_res++;
if ($_POST['vopros-20'] === "c") $test_res++;
if ($_POST['vopros-21'] === "c") $test_res++;
if ($_POST['vopros-22'] === "b") $test_res++;
if ($_POST['vopros-23'] === "b") $test_res++;
if ($_POST['vopros-24'] === "a") $test_res++;
if ($_POST['vopros-25'] === "b") $test_res++;
if ($_POST['vopros-26'] === "b") $test_res++;
if ($_POST['vopros-27'] === "a") $test_res++;
if ($_POST['vopros-28'] === "a") $test_res++;
if ($_POST['vopros-29'] === "b") $test_res++;
if ($_POST['vopros-30'] === "b") $test_res++;
if ($_POST['vopros-31'] === "b") $test_res++;
if ($_POST['vopros-32'] === "a") $test_res++;
if ($_POST['vopros-33'] === "c") $test_res++;
if ($_POST['vopros-34'] === "a") $test_res++;
if ($_POST['vopros-35'] === "a") $test_res++;
if ($_POST['vopros-36'] === "b") $test_res++;
if ($_POST['vopros-37'] === "a") $test_res++;
if ($_POST['vopros-38'] === "b") $test_res++;
if ($_POST['vopros-39'] === "a") $test_res++;
if ($_POST['vopros-40'] === "b") $test_res++;
if ($_POST['vopros-41'] === "b") $test_res++;
if ($_POST['vopros-42'] === "a") $test_res++;
if ($_POST['vopros-43'] === "b") $test_res++;
if ($_POST['vopros-44'] === "a") $test_res++;
if ($_POST['vopros-45'] === "b") $test_res++;
if ($_POST['vopros-46'] === "a") $test_res++;
if ($_POST['vopros-47'] === "b") $test_res++;
if ($_POST['vopros-48'] === "a") $test_res++;
if ($_POST['vopros-49'] === "c") $test_res++;
if ($_POST['vopros-50'] === "c") $test_res++;

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
