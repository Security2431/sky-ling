<?php
require 'libs/PHPMailer/PHPMailerAutoload.php';
require 'libs/localization/test.ru.php';
require 'libs/email_template.php';

ob_start();

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
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

if (trim($_POST['vopros-1']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-1']));}
if (trim($_POST['vopros-2']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-2']));}
if (trim($_POST['vopros-3']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-3']));}
if (trim($_POST['vopros-4']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-4']));}
if (trim($_POST['vopros-5']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-5']));}
if (trim($_POST['vopros-6']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-6']));}
if (trim($_POST['vopros-7']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-7']));}
if (trim($_POST['vopros-8']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-8']));}
if (trim($_POST['vopros-9']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-9']));}
if (trim($_POST['vopros-10']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-10']));}
if (trim($_POST['vopros-11']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-11']));}
if (trim($_POST['vopros-12']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-12']));}
if (trim($_POST['vopros-13']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-13']));}
if (trim($_POST['vopros-14']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-14']));}
if (trim($_POST['vopros-15']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-15']));}
if (trim($_POST['vopros-16']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-16']));}
if (trim($_POST['vopros-17']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-17']));}
if (trim($_POST['vopros-18']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-18']));}
if (trim($_POST['vopros-19']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-19']));}
if (trim($_POST['vopros-20']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-20']));}
if (trim($_POST['vopros-21']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-21']));}
if (trim($_POST['vopros-22']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-22']));}
if (trim($_POST['vopros-23']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-23']));}
if (trim($_POST['vopros-24']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-24']));}
if (trim($_POST['vopros-25']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-25']));}
if (trim($_POST['vopros-26']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-26']));}
if (trim($_POST['vopros-27']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-27']));}
if (trim($_POST['vopros-28']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-28']));}
if (trim($_POST['vopros-29']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-29']));}
if (trim($_POST['vopros-30']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-30']));}
if (trim($_POST['vopros-31']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-31']));}
if (trim($_POST['vopros-32']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-32']));}
if (trim($_POST['vopros-33']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-33']));}
if (trim($_POST['vopros-34']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-34']));}
if (trim($_POST['vopros-35']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-35']));}
if (trim($_POST['vopros-36']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-36']));}
if (trim($_POST['vopros-37']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-37']));}
if (trim($_POST['vopros-38']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-38']));}
if (trim($_POST['vopros-39']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-39']));}
if (trim($_POST['vopros-40']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-40']));}
if (trim($_POST['vopros-41']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-41']));}
if (trim($_POST['vopros-42']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-42']));}
if (trim($_POST['vopros-43']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-43']));}
if (trim($_POST['vopros-44']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-44']));}
if (trim($_POST['vopros-45']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-45']));}
if (trim($_POST['vopros-46']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-46']));}
if (trim($_POST['vopros-47']) === "b") {$test_res++; array_push($user_answers, trim($_POST['vopros-47']));}
if (trim($_POST['vopros-48']) === "a") {$test_res++; array_push($user_answers, trim($_POST['vopros-48']));}
if (trim($_POST['vopros-49']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-49']));}
if (trim($_POST['vopros-50']) === "c") {$test_res++; array_push($user_answers, trim($_POST['vopros-50']));}

$level = '';

if ($test_res <= 10) {
  $level = "Beginner";
} elseif ($test_res > 10 && $test_res <= 20) {
  $level = "Elementary";
} elseif ($test_res > 20 && $test_res <= 37) {
  $level = "Pre-intermediate";
} elseif ($test_res > 37 && $test_res < 45) {
  $level = "Intermediate";
} elseif ($test_res > 45 && $test_res <= 50) {
  $level = "Upper-intermediate";
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
$mail->Subject     = "Sky-ling. Школа английского";
$mail->ContentType = "text/html; charset=utf-8\r\n";
//адрес почтового ящика gmail
$mail->Username   = "skyling.emailz@gmail.com";
//ваш пароль от ящика
$mail->Password   = '123456789S';
$mail->isHTML(true);

// Replace with values
$data["answers"] = preg_replace('/\{{' . 'correct' .  '\}}/i', $test_res, $data["answers"]);
$data["answers"] = preg_replace('/\{{' . 'total' .  '\}}/i', $total_questions, $data["answers"]);
$data["level"]["value"] = preg_replace('/\{{' . 'correct' .  '\}}/i', $level, $data["level"]["value"]);

$mail->setFrom('no-reply@sky-ling.com', 'Sky-ling. Школа английского');
$mail->AddAddress($admin_email);     // Add a recipient
$to = trim($_POST['Email']); 
$mail->addReplyTo($to, 'Sky-ling. Школа английского');
//$mail->addReplyTo('info@example.com', 'Information');
$mail->AddAttachment(realpath('/words.pdf'),'words.pdf','base64', 'application/pdf');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Результаты вашего теста по английскому + Подарок!*';

$mail->Body = $NewsLetterClass->generateHTMLLetter($data, $answer_list, $user_answers);

$mail->AltBody = 'The result of your testing: ' .$test_res . 'correct answers. As promised, we attach the articles as a gift: https://goo.gl/RMzjaQ - 6 tips for learning English words; https://goo.gl/oqjSJB - DO vs Make; https://goo.gl/AZb6bs - Read and answer questions; Our contacts: skyling.onschool@gmail.com, http://sky-ling.com/';




if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent';
}

$output = ob_get_contents();
ob_end_flush();



file_put_contents('logtext.txt', $output);


