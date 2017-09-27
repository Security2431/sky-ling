<?php
require 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp-pulse.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "aametov@gmail.com";
$mail->Password = "G7XY3jG5HFiTD3X";
$mail->SetFrom('inform@webra-dev.com', 'Sky-ling. Школа английского');

$mail->CharSet = 'UTF-8';
$admin_email  = trim('aametov@gmail.com');

$test_res = 10;

$mail->AddAddress($admin_email);     // Add a recipient
$to = trim('aametov@gmail.com'); 
//$mail->addReplyTo($to, 'Sky-ling. Школа английского');
//$mail->addReplyTo('info@example.com', 'Information');
$mail->AddAttachment(realpath('/words.pdf'),'words.pdf','base64', 'application/pdf');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Результаты вашего теста по английскому + Подарок!*';
$mail->Body    = '<p style="color: #000000;">Здравствуйте, спасибо что прошли тест на нашем сайте! 
<br>Отправляем вам результаты тестирования и подарочные статьи, которые содержат в себе полезные рекомендации для самостоятельной проработки!
<br></p>
<tr style="background-color: #f8f8f8;">
	<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Результат вашего тестирования:</b></td>
	<td style="padding: 10px; border: #e9e9e9 1px solid;">' .$test_res . ' правильных ответов.</td>
</tr>
<tr style="background-color: #f8f8f8;">
	<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Ваш уровень:</b></td>
	<td style="padding: 10px; border: #e9e9e9 1px solid;">' . $level . '</td>
</tr>

<p>
Как и обещали, прикрепляем статьи в подарок:
<br>
https://goo.gl/RMzjaQ - 6 советов по изучению английских слов
<br>
https://goo.gl/6DqZzc - DO vs Make
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