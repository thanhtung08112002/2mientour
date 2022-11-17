// validete
function validete() {
    var hoten = document.frn.txtHoTen.value;
    var sodt = document.frn.tntSoDT.value;
    var gmail = document.frn.tgmail.value;
    var diachi = document.frn.txtDiaChi.value;
    var pay = document.frn.payment_method.value;
    var ok = true;
    //kiem tra ho ten
    if (hoten == "") {
        document.getElementById("loiHoTen").innerHTML = "Họ Tên là bắt buộc";
        ok = false;
    }
    else document.getElementById("loiHoTen").innerHTML = "";
    //kiem tra sodt
    var sodtt = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
    if (sodt == "") {
        document.getElementById("loiSoDT").innerHTML = "Số điện thoại là bắt buộc";
        ok = false;
    }
    else if (!sodt.match(sodtt)) {
        document.getElementById("loiSoDT").innerHTML = "Số điện thoại không đúng. Chỉ hỗ trợ nhập số.";
        ok = false;
    } else document.getElementById("loiSoDT").innerHTML = "";

    //kiem tra gmail
    var regmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (gmail == "") {
        document.getElementById("loigmail").innerHTML = "Email là bắt buộc";
        ok = false;
    }
    else if (!gmail.match(regmail)) {
        document.getElementById("loigmail").innerHTML = "Email không hợp lệ.";
        ok = false;
    }
    else document.getElementById("loigmail").innerHTML = "";

    //kiem tra dia chi
    if (diachi == "") {
        document.getElementById("loiDiaChi").innerHTML = "Địa chỉ là bắt buộc";
        ok = false;
    }
    else document.getElementById("loiDiaChi").innerHTML = "";

    //kiem tra ho ten
    if (pay == "") {
        document.getElementById("loipayment").innerHTML = "Vui lòng chọn phương thức thanh toán";
    } else {
        document.getElementById("loipayment").innerHTML = "";
        ok = false;

    }

    //tong ket kiem tra 
    if (ok) {
        // alert("dang ki thanh cong");
        return true;
    } else return false;
}  

// ẨN Hiện 
window.onload = function () {
    document.getElementById('payment_transfer').style.display = 'none';
    document.getElementById('payment_payoffice').style.display = 'none';
    document.getElementById('payment_payonline').style.display = 'none';
}
function yesnoCheck() {
    if (document.getElementById('transfer').checked) {
        document.getElementById('payment_transfer').style.display = 'block';
        document.getElementById('payment_payoffice').style.display = 'none';
        document.getElementById('payment_payonline').style.display = 'none';
    }
    else if (document.getElementById('payoffice').checked) {
        document.getElementById('payment_payoffice').style.display = 'block';
        document.getElementById('payment_transfer').style.display = 'none';
        document.getElementById('payment_payonline').style.display = 'none';
    }else if(document.getElementById('payonline').checked)
        {
         document.getElementById('payment_payonline').style.display = 'block';
        document.getElementById('payment_payoffice').style.display = 'none';
        document.getElementById('payment_transfer').style.display = 'none';
    }
}
//tinh tong
function calculate(){
    var pricebl =document.getElementById("pro");
    var qtyinput=document.getElementById("qty");
    var price =Number(pricebl.getAttribute("data-price"));
    var qty=Number(qtyinput.value);
    var moneyspan =document.getElementById("money");
    var moneystrong =document.getElementById("moneys");
    moneyspan.innerText=price*qty + "VNĐ";
    moneystrong.innerText=price*qty + "VNĐ";

}