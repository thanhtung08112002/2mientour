          <div class="banner banner_contact"><img src="<?= ROOT ?>public/images/lienhe.jpg" alt="" class="img-fluid"></div>

          <div class="web-contact">
              <div class="container">
                  <section class="contact">
                      <div class="contact-page">
                          <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
                          <div class="row">
                              <div class="col-sm-4">
                                  <a href="tel:<?= $fax?>" class="phone">
                                      <div class="phone-icon">
                                          <i class="fa fa-phone"></i>
                                      </div>
                                      <div class="phone-title">
                                          <strong><?= $fax?></strong>
                                      </div>
                                  </a>
                              </div>
                              <div class="col-sm-4">
                                  <a href="mailto:<?= $email_cong_ty?>" class="email">
                                      <div class="email-icon">
                                          <i class="fa fa-envelope"></i>
                                      </div>
                                      <div class="email-title">
                                          <strong><?= $email_cong_ty?></strong>
                                      </div>
                                  </a>
                              </div>
                              <div class="col-sm-4">
                                  <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+Cao+%C4%91%E1%BA%B3ng+FPT+Polytechnic/@21.0381278,105.7445984,17z/data=!3m1!4b1!4m5!3m4!1s0x313454b991d80fd5:0x53cefc99d6b0bf6f!8m2!3d21.0381278!4d105.7467871?hl=vi" class="address">
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
                          <form action="send_note" method="POST" name="frn" onsubmit="return validete()">
                              <div class="row contribute  ">
                                  <div class="col-sm-4">
                                      <div class="form-group ">
                                          <input type="text" name="txtHoTen" class="form-control" placeholder="Họ và Tên" required>
                                          <p id="loiHoTen" style="color: red;"></p>
                                      </div>
                                      <div class="form-group">
                                          <input type="text" name="tntSoDT" class="form-control" placeholder="Số Điện Thoại" required>
                                          <p id="loiSoDT" style="color: red;"></p>
                                      </div>
                                      <div class="form-group">
                                          <input type="text" name="tgmail" class="form-control" placeholder="Nhập email" required>
                                          <p id="loigmail" style="color: red;"></p>
                                      </div>
                                  </div>
                                  <div class="col-sm-8 purpose">
                                      <textarea name="note" placeholder="Nội Dung"></textarea>
                                      <p id="loinote" style="color: red;"></p>
                                  </div>
                                  <div class="col-sm-12">
                                      <button type="submit" name="btn-send" class="btn btn-warning">Gửi</button>
                                  </div>
                              </div>
                          </form>
                          <h3 class="infor_note"><?= isset($_COOKIE['addNote'])?$_COOKIE['addNote']:""?></h3>
                      </div>
                  </section>
              </div>
          </div>