// validete
function validete() {
    const loinhaptext = document.getElementById("loinhaptext");
    const loiloaitour = document.getElementById("loiloaitour");
    const loinoidi = document.getElementById("loinoidi");
    const loinoiden = document.getElementById("loinoiden");
    const loidongtour = document.getElementById("loidongtour");
    const loidate = document.getElementById("loidate");
    var text = document.frn.nhaptext.value;
    var ltour = document.frn.loaitour.value;
    var ndi = document.frn.noidi.value;
    var nden = document.frn.noiden.value;
    var dtour = document.frn.dongtour.value;
    var ndate = document.frn.date.value;
    var ok = true;
    //kiem tra ho ten
    if (text == "") {
        loinhaptext.innerHTML = "Nhập một địa danh";
        ok = false;
    } else loinhaptext.innerHTML = "";

    //Loại Tour
    if (ltour == "chonloaitour") {
        loiloaitour.innerHTML = "Hãy chọn loại Tour";
        ok = false;
    } else loiloaitour.innerHTML = "";
    //Nơi đi
    if (ndi == "noikhoihanh") {
        loinoidi.innerHTML = "Hãy chọn nơi khởi hành";
        ok = false;
    } else   loinoidi.innerHTML = "";
    //Nơi đến
    if (nden == "diemden") {
        loinoiden .innerHTML = "Hãy chọn điểm đến";
        ok = false;
    } else loinoiden.innerHTML = "";
    //Dòng Tour
    if (dtour == "dldongtour") {
        loidongtour.innerHTML = "Hãy chọn dòng tour";
        ok = false;
    } else loidongtour.innerHTML = "";
    //date
    if (ndate == "") {
        loidate.innerHTML = "Hãy chọn Ngày Đi";
        ok = false;
    } else loidate.innerHTML = "";
    //tong ket kiem tra
    if (ok) {
        // alert("dang ki thanh cong");
        return true;
    } else return false;
}