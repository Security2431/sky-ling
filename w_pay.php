<?php
/**
 * Created by PhpStorm.
 * User: nucleo
 * Date: 07.08.2017
 * Time: 11:30
 */
$u=$_GET['u'];
//$mail=$_GET['u'];
require_once ('libs/w4p/CP.php');
if ($u=='tripwire'){
    //var_dump($order);
    $order = new CreatePayment("sky_ling_com", "606699b52a7dbd18c72b8e8fe6fabd229973910b");
    //var_dump($order);
    $order->addProduct("4 ВИДЕО УРОКА",57, 1)
            ->setMerchantDomainName('sky-ling.com')
            ->setOrderReference(time())
            ->setOrderDate(time())
            ->setAmount(57.00)
            ->setReturnUrl('http://sky-ling.com/oto.html')
            ->setServiceUrl('http://sky-ling.com/mail.php')
            ->setCurrency('UAH');

       echo $order->getButtonPayment('Отправить', array('class'=>'button', 'id'=>'btnPayment', 'style'=>'display:none'));
      // var_dump($order);
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
            <script>
                $(function(){
                    $('form').submit();
                })
               </script>";
}elseif ($u=='oto'){
    //var_dump($order);
    $order = new CreatePayment("sky_ling_com", "606699b52a7dbd18c72b8e8fe6fabd229973910b");
    //var_dump($order);
    $order->addProduct("10 индивидуальных занятий",1000, 1)
        ->setMerchantDomainName('sky-ling.com')
        ->setOrderReference(time())
        ->setOrderDate(time())
        ->setAmount(1000.00)
        ->setReturnUrl('http://sky-ling.com/thank.html')
        ->setServiceUrl('http://sky-ling.com/mail.php')
        ->setCurrency('UAH');

    echo $order->getButtonPayment('Отправить', array('class'=>'button', 'id'=>'btnPayment', 'style'=>'display:none'));
    //var_dump($order);
    echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
            <script>
                $(function(){
                    $('form').submit();
                })
                </script>";

}elseif ($u=='tripwire_en'){
    //var_dump($order);
    $order = new CreatePayment("sky_ling_com", "606699b52a7dbd18c72b8e8fe6fabd229973910b");
    //var_dump($order);
    $order->addProduct("4 ВИДЕО УРОКА",1, 1)
        ->setMerchantDomainName('sky-ling.com')
        ->setOrderReference(time())
        ->setOrderDate(time())
        ->setAmount(1.00)
        ->setReturnUrl('http://sky-ling.com/en/oto.html')
        ->setServiceUrl('http://sky-ling.com/mail.php')
        ->setCurrency('UAH');

    echo $order->getButtonPayment('Отправить', array('class'=>'button', 'id'=>'btnPayment', 'style'=>'display:none'));
    // var_dump($order);
    echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
            <script>
                $(function(){
                    $('form').submit();
                })
               </script>";
}elseif ($u=='oto_en'){
    //var_dump($order);
    $order = new CreatePayment("sky_ling_com", "606699b52a7dbd18c72b8e8fe6fabd229973910b");
    //var_dump($order);
    $order->addProduct("10 индивидуальных занятий",2, 1)
        ->setMerchantDomainName('sky-ling.com')
        ->setOrderReference(time())
        ->setOrderDate(time())
        ->setAmount(2.00)
        ->setReturnUrl('http://sky-ling.com/en/thank.html')
        ->setServiceUrl('http://sky-ling.com/mail.php')
        ->setCurrency('UAH');

    echo $order->getButtonPayment('Отправить', array('class'=>'button', 'id'=>'btnPayment', 'style'=>'display:none'));
    //var_dump($order);
    echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
            <script>
                $(function(){
                    $('form').submit();
                })
                </script>";

}
else{
    //var_dump($_POST);
}