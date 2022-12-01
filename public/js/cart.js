// validete
function validete() {
  const loiHoTen = document.getElementById("loiHoTen");
  const loiDienThoai = document.getElementById("loiSoDT");
  const loiEmail = document.getElementById("loigmail");
  const loiDiaChi = document.getElementById("loiDiaChi");
  const loiThanhToan = document.getElementById("loipayment");
  var hoten = document.frn.txtHoTen.value;
  var sodt = document.frn.tntSoDT.value;
  var gmail = document.frn.tgmail.value;
  var diachi = document.frn.txtDiaChi.value;
  var pay = document.frn.payment_method.value;
  var ok = false;
  //kiem tra ho ten
  if (hoten == "") {
    loiHoTen.innerHTML = "Họ Tên là bắt buộc";
    ok = false;
  } else {
    ok = true;
    loiHoTen.innerHTML = "";
  }
  //kiem tra sodt
  var sodtt = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  if (sodt == "") {
    loiDienThoai.innerHTML = "Số điện thoại là bắt buộc";
    ok = false;
  } else if (!sodt.match(sodtt)) {
    loiDienThoai.innerHTML = "Số điện thoại không đúng. Chỉ hỗ trợ nhập số.";
    ok = false;
  } else {
    loiDienThoai.innerHTML = "";
  }

  //kiem tra gmail
  var regmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (gmail == "") {
    loiEmail.innerHTML = "Email là bắt buộc";
    ok = false;
  } else if (!gmail.match(regmail)) {
    loiEmail.innerHTML = "Email không hợp lệ.";
    ok = false;
  } else {
    loiEmail.innerHTML = "";
  }

  //kiem tra dia chi
  if (diachi == "") {
    loiDiaChi.innerHTML = "Địa chỉ là bắt buộc";
    ok = false;
  } else {
    loiDiaChi.innerHTML = "";
  }

  //kiem tra ho ten
  if (pay == "") {
    loiThanhToan.innerHTML = "Vui lòng chọn phương thức thanh toán";
    ok = false;
  } else {
    loiThanhToan.innerHTML = "";
  }

  //tong ket kiem tra
  if (ok) {
    // alert("dang ki thanh cong");
    return true;
  } else {
    return ok;
  }
}

// ẨN Hiện
window.onload = function () {
  document.getElementById("payment_transfer").style.display = "none";
  document.getElementById("payment_payoffice").style.display = "none";
  document.getElementById("payment_payonline").style.display = "none";
};
function yesnoCheck() {
  if (document.getElementById("transfer").checked) {
    document.getElementById("payment_transfer").style.display = "block";
    document.getElementById("payment_payoffice").style.display = "none";
    document.getElementById("payment_payonline").style.display = "none";
  } else if (document.getElementById("payoffice").checked) {
    document.getElementById("payment_payoffice").style.display = "block";
    document.getElementById("payment_transfer").style.display = "none";
    document.getElementById("payment_payonline").style.display = "none";
  } else if (document.getElementById("payonline").checked) {
    document.getElementById("payment_payonline").style.display = "block";
    document.getElementById("payment_payoffice").style.display = "none";
    document.getElementById("payment_transfer").style.display = "none";
  }
}
//tinh tong
var priceLon = document.getElementById("proLon");
var priceNho = document.getElementById("proNho");
var so_cho = document.getElementById("so_cho").getAttribute("data-so-cho");
var data_price_lon = priceLon.getAttribute("data-price");

var moneyspan = document.querySelectorAll(".money");
var moneyForm = document.querySelectorAll(".moneyForm");
var btn_pay = document.getElementsByName("btn-pay");

function calculateLon() {
  var qtyLon = document.getElementById("qtyLon").value;
  var qtyNho = document.getElementById("qtyNho").value;
  var qtyTotal = Number(qtyLon) + Number(qtyNho);
  if (qtyTotal > so_cho) {
    alert("Số chỗ vượt quá số chỗ còn ");
    btn_pay.forEach((element) => {
      element.setAttribute("disabled", true);
    });
  } else {
    btn_pay.forEach((element) => {
      element.removeAttribute("disabled");
    });
  }
  moneyspan.forEach((element) => {
    var resultMoney =
      Number(priceLon.getAttribute("data-price")) * qtyLon + "VND";
    const format = resultMoney.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    element.innerHTML = format;
  });

  moneyForm.forEach((element) => {
    var resultMoneyForm = priceLon.getAttribute("data-price") * qtyLon;
    element.innerHTML = resultMoneyForm;
  });
}

function calculateNho() {
  var qtyLon = document.getElementById("qtyLon").value;
  var qtyNho = document.getElementById("qtyNho").value;
  var qtyTotal = Number(qtyLon) + Number(qtyNho);
  if (qtyTotal > so_cho) {
    alert("Số chỗ vượt quá số chỗ còn ");
    btn_pay.forEach((element) => {
      element.setAttribute("disabled", true);
    });
  } else {
    btn_pay.forEach((element) => {
      element.removeAttribute("disabled");
    });
  }
}
