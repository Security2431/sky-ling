<?php
require '../libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet      = 'UTF-8';
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

$mail->setFrom('skyling.onschool@gmail.com', 'Sky-ling. Private English classes on Skype.');
$mail->addAddress($admin_email);     // Add a recipient
//$mail->addReplyTo('info@example.com', 'Information');
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
https://goo.gl/oqjSJB - DO vs Make
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
