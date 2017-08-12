<?php
/**
 * Created by PhpStorm.
 * User: nucleo
 * Date: 07.08.2017
 * Time: 12:44
 */

$json = file_get_contents('php://input');
$obj = json_decode($json, TRUE);
/*ob_start();
var_dump($obj);
$output = ob_get_clean();
file_put_contents('log.txt', $output, FILE_APPEND);*/
$email= $obj['email'];
$transactionStatus= $obj['transactionStatus'];
$amount = $obj['amount'];
$orderReference= $obj['orderReference'];
$ms="606699b52a7dbd18c72b8e8fe6fabd229973910b";
if ($transactionStatus=="Approved"){
    if ($amount==57) {
        $time=time();
        $string=$orderReference.";accept;".$time;
        $merchantSignature = hash_hmac('md5', $string, $ms);
        $a=array("orderReference"=>$orderReference, "status" => "accept", "time"=>$time, "signature"=>$merchantSignature);
        $b=json_encode($a);
        echo $b;
        //отправка письма админу
        $project_name = "Sky-ling. Школа английского.";
        $admin_email  = "skyling.onschool@gmail.com";
        $admin_email2  = "website4you.dp@gmail.com";
        $form_subject = "Успешная оплата 4 уроков";


        $message = "Успешная оплата 4 уороков, email оплатившего " . $email;
        function adopt($text)
        {
            return '=?UTF-8?B?' . Base64_encode($text) . '?=';
        }

        $headers = "MIME-Version: 1.0" . PHP_EOL .
            "Content-Type: text/html; charset=utf-8" . PHP_EOL .
            'From: ' . adopt($project_name) . ' <' . $admin_email . '>' . PHP_EOL;
        mail($admin_email.", ".$admin_email2, adopt($form_subject), $message, $headers);

        //отправка письма с сылками
        $message = "Поздравляем! У вас явно есть желание выучить английский!<br>
                    <br>
                    Вы только что приобрели доступ к четырем видеоурокам по английскому языку!<br> 
                    Приступайте к изучению прямо сейчас!<br>
                    <br>
                    <a href='https://youtu.be/wF_qBQWAiZQ'>Prepositions ON AT IN in time expressions</a><br>
                    <a href='https://youtu.be/4pAuLu2o-Wo'>At a restaurant</a><br>
                    <a href='https://youtu.be/9876wgxPIts'>Used to</a><br>
                    <a href='https://youtu.be/9jn5Qwz3jN8'>Common mistakes</a><br> 
                    <br>
                    Наши контакты: <a href='mailto:skyling.onschool@gmail.com'>skyling.onschool@gmail.com</a>, <a href='http://sky-ling.com/'> http://sky-ling.com/</a>";
        $project_name = "Sky-ling. Школа английского. ";
        $form_subject = "[ Ваши 4 видео-урока по английскому языку ]";
        $headers = "MIME-Version: 1.0" . PHP_EOL .
            "Content-Type: text/html; charset=utf-8" . PHP_EOL .
            'From: ' . adopt($project_name) . ' <skyling.onschool@gmail.com >' . PHP_EOL;
        mail($email, adopt($form_subject), $message, $headers);

    }elseif($amount==1000){
        $time=time();
        $string=$orderReference.";accept;".$time;
        $merchantSignature = hash_hmac('md5', $string, $ms);
        $a=array("orderReference"=>$orderReference, "status" => "accept", "time"=>$time, "signature"=>$merchantSignature);
        $b=json_encode($a);
        echo $b;
        //отправка письма админу
        $project_name = "English Skype";
        $admin_email  = "skyling.onschool@gmail.com";
        $admin_email2  = "website4you.dp@gmail.com";
        $form_subject = "Успешная оплата";


        $message = "Успешная оплатиа 10 уроков " . $email;
        function adopt($text)
        {
            return '=?UTF-8?B?' . Base64_encode($text) . '?=';
        }

        $headers = "MIME-Version: 1.0" . PHP_EOL .
            "Content-Type: text/html; charset=utf-8" . PHP_EOL .
            'From: ' . adopt($project_name) . ' <' . $admin_email . '>' . PHP_EOL;
        mail($admin_email.", ".$admin_email2, adopt($form_subject), $message, $headers);

        //отправка письма о покупке 10 уроков клиенту

        $message = "Вы успешно приобрели 10 индивидуальных занятий по английскому языку!<br> 
                    <br>
                    Наш преподаватель свяжется с Вами в ближайшее время, чтобы согласовать удобное для Вас время занятий!<br>
                    <br>
                    Наши контакты: <a href='mailto:skyling.onschool@gmail.com'>skyling.onschool@gmail.com</a>, <a href='http://sky-ling.com/'> http://sky-ling.com/</a>";
        $project_name = "Sky-ling. Школа английского.";
        $form_subject = "[ Поздравляем с приобретением 10 индивидуальных уроков ]";
        $headers = "MIME-Version: 1.0" . PHP_EOL .
            "Content-Type: text/html; charset=utf-8" . PHP_EOL .
            'From: ' . adopt($project_name) . ' <skyling.onschool@gmail.com >' . PHP_EOL;
        mail($email, adopt($form_subject), $message, $headers);
    }
}elseif($transactionStatus=="Declined"){
    $time=time();
    $string=$orderReference.";accept;".$time;
    $merchantSignature = hash_hmac('md5', $string, $ms);
    $a=array("orderReference"=>$orderReference, "status" => "accept", "time"=>$time, "signature"=>$merchantSignature);
    $b=json_encode($a);
    echo $b;
}elseif($transactionStatus=="Expired"){
    $time=time();
    $string=$orderReference.";accept;".$time;
    $merchantSignature = hash_hmac('md5', $string, $ms);
    $a=array("orderReference"=>$orderReference, "status" => "accept", "time"=>$time, "signature"=>$merchantSignature);
    $b=json_encode($a);
    echo $b;
}