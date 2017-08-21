<?php
require 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$admin_email  = trim($_POST["admin_email"]);
$test_res = trim($_POST["test-result"]);

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress($admin_email);     // Add a recipient
$mail->addReplyTo('info@example.com', 'Information');

$mail->addAttachment('/words.pdf');         // Add attachments
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Результаты теста';
$mail->Body    = '<tr style="background-color: #f8f8f8;">
	<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Результат вашего тестирования:</b></td>
	<td style="padding: 10px; border: #e9e9e9 1px solid;">' .$test_res . 'правильных ответов.</td>
	<td style="padding: 10px; border: #e9e9e9 1px solid;">Как и обещали, прикрепляем статьи в подарок.</td>
</tr>';
$mail->AltBody = 'Результат вашего тестирования: ' .$test_res . 'правильных ответов. Как и обещали, прикрепляем статьи в подарок.';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent';
}
