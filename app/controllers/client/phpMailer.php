<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

if(isset($_POST['btn-pay'])){
   
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host ='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure ='ssl';
    $mail->Port =465;
    $mail->Username ='thanhtungx0811@gmail.com';
    $mail->Password ='zngssfcwgxkghxkf';
    $mail->setFrom('thanhtungx0811@gmail.com');
    $mail -> addAddress($_POST["tgmail"]);
    $mail-> isHTML(true);
    $mail->Subject = 'Thông báo từ 2 miền tour';
    $mail->Body = 'bạn đã đặt tour thành công';
    $mail->send();
}
