          
       <div class="banner banner_contact"><img src="<?= ROOT ?>public/images/lienhe.jpg" alt="" class="img-fluid"></div>
          <div class="web-contact">
                <div class="container">
                    <section class="contact">
                        <div class="contact-page">
                            <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="tel:0123844904" class="phone">
                                        <div class="phone-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                            <div class="phone-title">
                                                <strong>0123844904</strong>
                                            </div>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="email:admin@gmail.com" class="email">
                                        <div class="email-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="email-title">
                                            <strong>admin@gmail.com</strong>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="email:admin@gmail.com" class="address">
                                        <div class="address-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="address-title">
                                            <strong>Trường cao đẳng FPT </strong>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </section>
                    <section class="comments">
                        <div class="user-comments">
                            <h2>Ý KIẾN ĐÓNG GÓP CỦA KHÁCH HÀNG</h2>
                            <form action="#" name="frn" onsubmit="return validete()">
                                <div class="row contribute  ">
                                    <div class="col-sm-4">
                                        <div class="form-group ">
                                            <input type="text" name="txtHoTen" class="form-control" placeholder="Họ và Tên">
                                            <p id="loiHoTen" style="color: red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="tntSoDT" class="form-control" placeholder="Số Điện Thoại">
                                            <p id="loiSoDT" style="color: red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="tgmail" class="form-control" placeholder="Nhập email">
                                            <p id="loigmail" style="color: red;"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 purpose">
                                        <textarea name="note" placeholder="Nội Dung"></textarea>
                                        <p id="loinote" style="color: red;"></p>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-warning">Gửi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>