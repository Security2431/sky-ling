<?php
require '../libs/PHPMailer/PHPMailerAutoload.php';
require '../libs/localization/test.en.php';
require '../libs/email_template.php';

$mail = new PHPMailer;
$mail->CharSet      = 'UTF-8';
$admin_email  = trim($_POST["admin_email"]);

$total_questions = 50;

$test_res = 0;
$answer_list = array(
  "a",
  "b",
  "b",
  "b",
  "c",
  "b",
  "c",
  "a",
  "a",
  "c",
  "b",
  "b",
  "b",
  "a",
  "a",
  "c",
  "c",
  "a",
  "b",
  "c",
  "c",
  "b",
  "b",
  "a",
  "b",
  "b",
  "a",
  "a",
  "b",
  "b",
  "b",
  "a",
  "c",
  "a",
  "a",
  "b",
  "a",
  "b",
  "a",
  "b",
  "b",
  "a",
  "b",
  "a",
  "b",
  "a",
  "b",
  "a",
  "c",
  "c"
  );

$user_answers = array();

for ($i = 0; $i < 50; $i++) {
  array_push($user_answers, trim($_POST['vopros-' . ($i + 1)])); 
  if (trim($_POST['vopros-' . ($i + 1)]) === $answer_list[$i]) { $test_res++; }
}

$level = '';
$levelLink = '';

if ($test_res <= 10) {
  $level = "Beginner";
  $levelLink = $data["level"]["links"]["beginner"];
} elseif ($test_res > 10 && $test_res <= 20) {
  $level = "Elementary";
  $levelLink = $data["level"]["links"]["elementary"];
} elseif ($test_res > 20 && $test_res <= 37) {
  $level = "Pre-intermediate";
  $levelLink = $data["level"]["links"]["pre-intermediate"];
} elseif ($test_res > 37 && $test_res < 45) {
  $level = "Intermediate";
  $levelLink = $data["level"]["links"]["intermediate"];
} elseif ($test_res > 45 && $test_res <= 50) {
  $level = "Upper-intermediate";
  $levelLink = $data["level"]["links"]["upper-intermediate"];
}

$mail->IsSMTP();
//адрес smtp сервера
$mail->Host       = "smtp.gmail.com";
//сообщения дебагера, 0-не показываем
$mail->SMTPDebug  = 3;
//если сервер требует авторизации
$mail->SMTPAuth   = true;
//тип шифрования
$mail->SMTPSecure = "ssl";
//порт сервера
$mail->Port       = 465; //465;
//приоритет почты, 3 - нормально
$mail->Priority    = 3;
//кодировка
$mail->CharSet     = 'UTF-8';
$mail->Encoding    = '8bit';

//тема письма
$mail->Subject     = "Sky-ling. Private English classes on Skype.";
$mail->ContentType = "text/html; charset=utf-8\r\n";
//адрес почтового ящика gmail
$mail->Username   = "skyling.emailz@gmail.com";
//ваш пароль от ящика
$mail->Password   = '123456789S';

// Replace with values
$data["answers"] = preg_replace('/\{{' . 'correct' .  '\}}/i', $test_res, $data["answers"]);
$data["answers"] = preg_replace('/\{{' . 'total' .  '\}}/i', $total_questions, $data["answers"]);
$data["level"]["value"] = preg_replace('/\{{' . 'level' .  '\}}/i', $level, $data["level"]["value"]);
$data["btn"]["href"] = preg_replace('/\{{' . 'download' .  '\}}/i', $levelLink, $data["btn"]["href"]);

$mail->setFrom('no-reply@sky-ling.com', 'Sky-ling. Private English classes on Skype.');
$mail->addAddress($admin_email);     // Add a recipient
$to = trim($_POST['Email']); 
$mail->addReplyTo($to, 'Sky-ling. Private English classes on Skype.');
$mail->AddAttachment(realpath('/words.pdf'),'words.pdf','base64', 'application/pdf');
$mail->isHTML(true);                                  // Set email format to HTML

$NewsLetterClass    = new NewsLetterClass();
$mail->Body         = $NewsLetterClass->generateHTMLLetter($data, $answer_list, $user_answers);

$mail->AltBody = 'The result of your testing: ' .$test_res . 'correct answers. As promised, we attach the articles as a gift: https://goo.gl/RMzjaQ - 6 tips for learning English words; https://goo.gl/oqjSJB - DO vs Make; https://goo.gl/AZb6bs - Read and answer questions; Our contacts: skyling.onschool@gmail.com, http://sky-ling.com/';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent';
}
