// validete
function validete() {
    const loiEmail = document.getElementById("loigmail");
    const loipassword = document.getElementById("loipassword");
    var gmail = document.frn.tgmail.value;
    var tpassword = document.frn.password.value;
    var ok = true;

    //kiem tra gmail
    var regmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (gmail == "") {
        loiEmail.innerHTML = "Email là bắt buộc";
        ok = false;
    } else if (!gmail.match(regmail)) {
        loiEmail.innerHTML = "Email không hợp lệ.";
        ok = false;
    } else loiEmail.innerHTML = "";
    //kiem tra Password
    if ( tpassword  == "") {
        loipassword.innerHTML = "Password là bắt buộc";
        ok = false;
    } else loipassword.innerHTML = "";

    //tong ket kiem tra
    if (ok) {
        // alert("dang ki thanh cong");
        return true;
    } else return false;
}
