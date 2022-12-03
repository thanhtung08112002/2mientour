<?php $vnp_TmnCode = "LVBGWK85"; //Website ID in VNPAY System
$vnp_HashSecret = "AJWILPTTOVUZKQBYLCBVDAOIOEPOBKIS"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/2mientour/vnpay_php/vnpay_return.php";
// $vnp_Returnurl = "http://localhost/2mientour/cart/?matour=$ma_tour_none";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
$vnp_SecureHash = $_GET['vnp_SecureHash'];
$inputData = array();
foreach ($_GET as $key => $value) {
    if (substr($key, 0, 4) == "vnp_") {
        $inputData[$key] = $value;
    }
}

unset($inputData['vnp_SecureHash']);
ksort($inputData);
$i = 0;
$hashData = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
}

$secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
?>
<!--Begin display -->
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">VNPAY RESPONSE</h3>
    </div>
    <div class="table-responsive">
        <div class="form-group">
            <label>Mã đơn hàng:</label>

            <label><?php echo $_GET['vnp_TxnRef'] ?></label>
        </div>
        <div class="form-group">

            <label>Số tiền:</label>
            <label><?php echo currency_format(substr($_GET['vnp_Amount'],0,-2) )?></label>
        </div>
        <div class="form-group">
            <label>Nội dung thanh toán:</label>
            <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
        </div>
        <div class="form-group">
            <label>Mã phản hồi (vnp_ResponseCode):</label>
            <label><?php echo $_GET['vnp_ResponseCode'] ?></label>
        </div>
        <div class="form-group">
            <label>Mã GD Tại VNPAY:</label>
            <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
        </div>
        <div class="form-group">
            <label>Mã Ngân hàng:</label>
            <label><?php echo $_GET['vnp_BankCode'] ?></label>
        </div>
        <div class="form-group">
            <label>Thời gian thanh toán:</label>
            <label><?php echo $_GET['vnp_PayDate'] ?></label>
        </div>
        <div class="form-group">
            <label>Kết quả:</label>
            <label>
                <?php
                if ($secureHash == $vnp_SecureHash) {
                    if ($_GET['vnp_ResponseCode'] == '00') {
                        echo "<span style='color:blue'>GD Thành Công</span>";
                    } else {
                        echo "<span style='color:red'>GD Không Thành Công</span>";
                    }
                } else {
                    echo "<span style='color:red'>Chữ ký không hợp lệ</span>";
                }
                ?>

            </label>
        </div>
    </div>
    <p>
        &nbsp;
    </p>
    <div class="footer">
        <p style="color: #fff;">&copy; VNPAY <?php echo date('Y') ?></p>
        <a href="<?= ROOT ?>" class="btn btn-primary" style="    font-size: 1.8rem;
    margin-bottom: 2rem;">Đặt tour tiếp</a>
    </div>
</div>