<?php
require 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$admin_email  = trim($_POST["admin_email"]);

$test_res = 0;

if (trim($_POST['vopros-1']) === "b") $test_res++;
if (trim($_POST['vopros-2']) === "b") $test_res++;
if (trim($_POST['vopros-3']) === "b") $test_res++;
if (trim($_POST['vopros-4']) === "b") $test_res++;
if (trim($_POST['vopros-5']) === "a") $test_res++;
if (trim($_POST['vopros-6']) === "a") $test_res++;
if (trim($_POST['vopros-7']) === "a") $test_res++;
if (trim($_POST['vopros-8']) === "c") $test_res++;
if (trim($_POST['vopros-9']) === "a") $test_res++;
if (trim($_POST['vopros-10']) === "d") $test_res++;

$mail->setFrom('no-reply@sky-ling.com', 'Sky-ling. Школа английского');
$mail->AddAddress($admin_email);     // Add a recipient
$to = trim($_POST['Email']); 
$mail->addReplyTo($to, 'Sky-ling. Школа английского');
//$mail->addReplyTo('info@example.com', 'Information');
$mail->AddAttachment(realpath('/words.pdf'),'words.pdf','base64', 'application/pdf');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Результаты вашего теста по английскому + Подарок!';
$mail->Body    = '<p style="color: #000000;">Здравствуйте, спасибо что прошли тест на нашем сайте! 
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
$mail->AltBody = 'The result of your testing: ' .$test_res . 'correct answers. As promised, we attach the articles as a gift: https://goo.gl/RMzjaQ - 6 tips for learning English words; https://goo.gl/oqjSJB - DO vs Make; https://goo.gl/AZb6bs - Read and answer questions; Our contacts: skyling.onschool@gmail.com, http://sky-ling.com/';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent';
}