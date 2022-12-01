<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';
require_once 'app/controllers/client/controllers.php';
require_once 'app/models/thanh_toan_tour.php';

if (isset($_POST['btn-pay'])) {
    extract($_POST);
    $data = [
        $ma_tour_none,
        $id_tour_lite_none,
        $txtHoTen,
        $tntSoDT,
        $tgmail,
        $txtDiaChi,
        $payment_method,
        $so_nguoi,
        $tien_none
    ];
    $getThanhToanTourGanNhat = getThanhToanTourGanNhat();
    foreach ( $getThanhToanTourGanNhat as $item){
        $infor = $item;
    }
    extract($infor);
    $subject_email = 'Thông báo đặt tour thành công từ 2 miền tour';
    $content_email = "<p>2 miền tour cảm ơn bạn đã sử dụng dịch vụ của chúng tôi.</p>
    <p> Thông tin đơn hàng của bạn gồm:
    
    -Du lịch $ten_tour<br>
    -Ngày khởi hành $ngay_khoi_hanh<br>
    -Người lớn: $nguoi_lon<br>
    -Trẻ em: $tre_em<br>
    $thanh_tien
    Thông tin liên hệ
    -Họ tên: $ho_ten <br>
    -Số điện thoại $sdt <br>
    -Email:   $email<br>
    -Địa chỉ: $dia_chi <br>
    Phương thức thanh toán: $ten_phuong_thuc</p> </p>
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
    render('pay_success',['getThanhToanTourGanNhat' => $getThanhToanTourGanNhat]);
}
