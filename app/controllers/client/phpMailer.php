<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

if (isset($_POST['btn-pay'])) {
    $subject_email = 'Thông báo đặt tour thành công từ 2 miền tour';
    $content_email = "<p>2 miền tour cảm ơn bạn đã sử dụng dịch vụ của chúng tôi.</p>
    <p> Mọi thắc mắc xin vui lòng gọi số hotline <a href='tel:19008188'>19008188</a></p>";
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->Username = 'thanhtungx0811@gmail.com';
    $mail->Password = 'zngssfcwgxkghxkf';
    $mail->setFrom('thanhtungx0811@gmail.com');
    $mail->addAddress($_POST["tgmail"]);
    $mail->isHTML(true);
    $mail->Subject = $subject_email;
    $mail->Body = $content_email;
    $mail->send();
}
