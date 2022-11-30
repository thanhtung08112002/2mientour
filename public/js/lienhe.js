// validete
function validete() {
    const loiHoTen = document.getElementById("loiHoTen");
    const loiDienThoai = document.getElementById("loiSoDT");
    const loiEmail = document.getElementById("loigmail");
    const loinote = document.getElementById("loinote");
    var hoten = document.frn.txtHoTen.value;
    var sodt = document.frn.tntSoDT.value;
    var gmail = document.frn.tgmail.value;
    var tnote = document.frn.note.value;
    var ok = true;
    //kiem tra ho ten
    if (hoten == "") {
        loiHoTen.innerHTML = "Họ Tên là bắt buộc";
        ok = false;
    } else loiHoTen.innerHTML = "";
    //kiem tra sodt
    var sodtt = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
    if (sodt == "") {
        ok = false;
    } else if (!sodt.match(sodtt)) {
        loiDienThoai.innerHTML =
            "Số điện thoại không đúng. Chỉ hỗ trợ nhập số.";
        ok = false;
    } else loiDienThoai.innerHTML = "";

    //kiem tra gmail
    var regmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (gmail == "") {
        loiEmail.innerHTML = "Email là bắt buộc";
        ok = false;
    } else if (!gmail.match(regmail)) {
        loiEmail.innerHTML = "Email không hợp lệ.";
        ok = false;
    } else loiEmail.innerHTML = "";

    //kiem tra dia chi
    if (tnote == "") {
        loinote.innerHTML = "Nhập nội dung";
        ok = false;
    } else loinote.innerHTML = "";
    //tong ket kiem tra
    if (ok) {
        // alert("dang ki thanh cong");
        return true;
    } else return false;
}