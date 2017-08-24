<?php
require '../libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet      = 'UTF-8';
$admin_email  = trim($_POST["admin_email"]);

$test_res = 0;

if (trim($_POST['vopros-1']) === "a") $test_res++;
if (trim($_POST['vopros-2']) === "b") $test_res++;
if (trim($_POST['vopros-3']) === "b") $test_res++;
if (trim($_POST['vopros-4']) === "b") $test_res++;
if (trim($_POST['vopros-5']) === "c") $test_res++;
if (trim($_POST['vopros-6']) === "b") $test_res++;
if (trim($_POST['vopros-7']) === "c") $test_res++;
if (trim($_POST['vopros-8']) === "a") $test_res++;
if (trim($_POST['vopros-9']) === "a") $test_res++;
if (trim($_POST['vopros-10']) === "c") $test_res++;
if (trim($_POST['vopros-11']) === "b") $test_res++;
if (trim($_POST['vopros-12']) === "b") $test_res++;
if (trim($_POST['vopros-13']) === "b") $test_res++;
if (trim($_POST['vopros-14']) === "a") $test_res++;
if (trim($_POST['vopros-15']) === "a") $test_res++;
if (trim($_POST['vopros-16']) === "c") $test_res++;
if (trim($_POST['vopros-17']) === "c") $test_res++;
if (trim($_POST['vopros-18']) === "a") $test_res++;
if (trim($_POST['vopros-19']) === "b") $test_res++;
if (trim($_POST['vopros-20']) === "c") $test_res++;
if (trim($_POST['vopros-21']) === "c") $test_res++;
if (trim($_POST['vopros-22']) === "b") $test_res++;
if (trim($_POST['vopros-23']) === "b") $test_res++;
if (trim($_POST['vopros-24']) === "a") $test_res++;
if (trim($_POST['vopros-25']) === "b") $test_res++;
if (trim($_POST['vopros-26']) === "b") $test_res++;
if (trim($_POST['vopros-27']) === "a") $test_res++;
if (trim($_POST['vopros-28']) === "a") $test_res++;
if (trim($_POST['vopros-29']) === "b") $test_res++;
if (trim($_POST['vopros-30']) === "b") $test_res++;
if (trim($_POST['vopros-31']) === "b") $test_res++;
if (trim($_POST['vopros-32']) === "a") $test_res++;
if (trim($_POST['vopros-33']) === "c") $test_res++;
if (trim($_POST['vopros-34']) === "a") $test_res++;
if (trim($_POST['vopros-35']) === "a") $test_res++;
if (trim($_POST['vopros-36']) === "b") $test_res++;
if (trim($_POST['vopros-37']) === "a") $test_res++;
if (trim($_POST['vopros-38']) === "b") $test_res++;
if (trim($_POST['vopros-39']) === "a") $test_res++;
if (trim($_POST['vopros-40']) === "b") $test_res++;
if (trim($_POST['vopros-41']) === "b") $test_res++;
if (trim($_POST['vopros-42']) === "a") $test_res++;
if (trim($_POST['vopros-43']) === "b") $test_res++;
if (trim($_POST['vopros-44']) === "a") $test_res++;
if (trim($_POST['vopros-45']) === "b") $test_res++;
if (trim($_POST['vopros-46']) === "a") $test_res++;
if (trim($_POST['vopros-47']) === "b") $test_res++;
if (trim($_POST['vopros-48']) === "a") $test_res++;
if (trim($_POST['vopros-49']) === "c") $test_res++;
if (trim($_POST['vopros-50']) === "c") $test_res++;

$mail->setFrom('no-reply@sky-ling.com', 'Sky-ling. Private English classes on Skype.');
$mail->addAddress($admin_email);     // Add a recipient
$to = trim($_POST['Email']); 
$mail->addReplyTo($to, 'Sky-ling. Private English classes on Skype.');
$mail->AddAttachment(realpath('/words.pdf'),'words.pdf','base64', 'application/pdf');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'The results of your English test + Gift!';
$mail->Body    = '<p style="color: #000000;">Hello, thank you for taking the test on our website! 
<br>We send you test results and gift articles, which contain useful recommendations for self-study!

<br></p>
<tr style="background-color: #f8f8f8;">
	<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>The result of your testing:</b></td>
	<td style="padding: 10px; border: #e9e9e9 1px solid;">' .$test_res . ' correct answers.</td>
</tr>

<p>
As promised, we attach the articles as a gift:
<br>
https://goo.gl/RMzjaQ - 6 tips for learning English words
<br>
https://goo.gl/6DqZzc - DO vs Make
<br>
https://goo.gl/AZb6bs - Read and answer questions
<br>
<br>
Our contacts: 
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
