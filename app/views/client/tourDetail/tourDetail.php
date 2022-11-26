<div class="banner banner_details "><img src="<?= ROOT ?>public/images/banner_search.jpg" alt="" class="img-fluid"></div>
<div class="container">
    <div class="row align-items-start" style="margin-top: 5rem;">
        <div class="col-lg-8 m-15px-tb">
            <div class="tour-content">
                <div class="tour-heading">
                    <i class="fa fa-image"></i>
                    HÌNH ẢNH
                </div>
                <div class="panel-img">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block" src="<?= ROOT ?>public/images/imgs_tour/catba3.jpg" width="750px" height="480x">
                            </div>
                            <?php foreach ($getKhoaTourWithMaTour as $item) : ?>
                                <?php extract($item) ?>
                                <div class="carousel-item ">
                                    <img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh ?>" width="750px" height="480x">
                                </div>
                            <?php endforeach ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="schedule-heading">
                    <i class="fa fa-list-ol"></i>
                    <span>CHƯƠNG TRÌNH TOUR</span>
                </div>
                <div class="div-content">
                    <div class="schedule-icon">
                        <p>
                            <i class="fa fa-plane"></i>
                            <span class="schedule-title">Phương tiện:</span>
                            <strong class="schedule-time">Máy bay - xe ô tô</strong>
                        </p>
                        <p>
                            <i class="fa fa-clock-o"></i>
                            <span class="schedule-title">Thời gian:</span> <strong class="schedule-time">6
                                ngày 5 đêm</strong>
                        </p>
                        <p>
                            <i class="fa fa-flag"></i>
                            <span class="schedule-title">Ngày khởi hành: </span>
                            <ins class="schedule-time">05/11/2022</ins>
                        </p>
                    </div>
                    <div class="schedule-step">
                        <div class="schedule-step-content">
                            <p class="schedule-step-heading">Ngày 1. TP HỒ CHÍ MINH - YANG YANG</p>
                            <div class="schedule-step-icon">
                                <p class="schedule-step-word">THU GỌN</p>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);" height="24px" width="24px" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        <div class="schedule-step-seemore">
                            <p class="schedule-step-start"><strong>21:00</strong> Quý khách tập trung tại
                                sân
                                bay
                                Tân Sơn Nhất ga đi quốc
                                tế, Trưởng Đoàn
                                hướng dẫn làm thủ tục check in đón chuyến bay <strong>4V254</strong> đi Yang
                                Yang.</p>
                            <div class="schedule-step-note">
                                <strong>
                                    Lưu ý: Trên máy bay không phục vụ ăn uống (hot meal), và không bao gồm
                                    chăn
                                    đắp, gối cổ trên máy bay. Quý khách nên mang theo chăn đắp vì nhiệt độ
                                    trên
                                    máy bay thấp.
                                </strong>
                            </div>
                        </div>

                    </div>
                    <div class="schedule-step">
                        <div class="schedule-step-content">
                            <p class="schedule-step-heading">Ngày 2. TRÀNG AN - BÁI ĐÍNH - HẠ LONG</p>
                            <div class="schedule-step-icon">
                                <p class="schedule-step-word">THU GỌN</p>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);" height="24px" width="24px" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        <div class="schedule-step-seemore">
                            <p class="schedule-step-start"><strong>Sáng: </strong> Quý khách tập trung tại
                                ga đi trong nước sân bay Tân Sơn Nhất. HDV
                                BenThanh
                                Tourist đón Quý khách làm thủ tục khởi hành đi Hà Nội.</p>
                            <p>
                                <strong>Trưa:</strong>
                                Đoàn dùng bữa trưa tại nhà hàng
                            </p>
                            <p>
                                <strong>Chiều:</strong>
                                Doan di tham quan
                            </p>
                            <p><strong>Cố đô Hoa Lư</strong>
                                là quần thể di tích lịch sử đất nước đặc biệt quan trọng của nước ta.
                                Đây
                                cũng là một trong bốn vùng lõi của quần thể di sản thế giới Tràng An đã
                                được
                                UNESCO công nhận.</p>
                            <p> <strong>Tuyệt tình cốc </strong>
                                địa danh thắng cảnh này là Động An Tiêm thuộc quần thể hang động của di
                                tích
                                Cố đô Hoa Lư. Khi bước chân đến khu vực chùa An Tiêm, du khách sẽ cảm
                                nhận
                                được vẻ đẹp đầy tĩnh mịch. Từ trên cao, bạn sẽ được chiêm ngưỡng vẻ đẹp
                                sơn
                                thủy hoang sơ nhưng không kém phần thơ mộng
                            </p>
                            <p>
                                <strong>Tối:</strong>
                                an toi tai nha hang
                            </p>
                        </div>

                    </div>
                    <div class="schedule-step">
                        <div class="schedule-step-content">
                            <p class="schedule-step-heading">Ngày 3. HẠ LONG - YÊN TỬ - HÀ NỘI</p>
                            <div class="schedule-step-icon">
                                <p class="schedule-step-word">THU GỌN</p>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);" height="24px" width="24px" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        <div class="schedule-step-seemore">
                            <p class="schedule-step-start"><strong>Sáng: </strong> Quý khách tập trung tại
                                ga đi trong nước sân bay Tân Sơn Nhất. HDV
                                BenThanh
                                Tourist đón Quý khách làm thủ tục khởi hành đi Hà Nội.</p>
                            <p>
                                <strong>Trưa:</strong>
                                Đoàn dùng bữa trưa tại nhà hàng
                            </p>
                            <p>
                                <strong>Chiều:</strong>
                                Doan di tham quan
                            </p>
                            <p><strong>Cố đô Hoa Lư</strong>
                                là quần thể di tích lịch sử đất nước đặc biệt quan trọng của nước ta.
                                Đây
                                cũng là một trong bốn vùng lõi của quần thể di sản thế giới Tràng An đã
                                được
                                UNESCO công nhận.</p>
                            <p> <strong>Tuyệt tình cốc </strong>
                                địa danh thắng cảnh này là Động An Tiêm thuộc quần thể hang động của di
                                tích
                                Cố đô Hoa Lư. Khi bước chân đến khu vực chùa An Tiêm, du khách sẽ cảm
                                nhận
                                được vẻ đẹp đầy tĩnh mịch. Từ trên cao, bạn sẽ được chiêm ngưỡng vẻ đẹp
                                sơn
                                thủy hoang sơ nhưng không kém phần thơ mộng
                            </p>
                            <p>
                                <strong>Tối:</strong>
                                an toi tai nha hang
                            </p>
                        </div>

                    </div>
                    <div class="schedule-step ">
                        <div class="schedule-step-content">
                            <p class="schedule-step-heading ">Ngày 4. LĂNG BÁC - VĂN MIẾU - LÀO CAI - SA PA
                            </p>
                            <div class="schedule-step-icon">
                                <p class="schedule-step-word">THU GỌN</p>
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);" height="24px" width="24px" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        <div class="schedule-step-seemore">
                            <p class="schedule-step-start"><strong>Sáng: </strong> Quý khách tập trung tại
                                ga đi trong nước sân bay Tân Sơn Nhất. HDV
                                BenThanh
                                Tourist đón Quý khách làm thủ tục khởi hành đi Hà Nội.</p>
                            <p>
                                <strong>Trưa:</strong>
                                Đoàn dùng bữa trưa tại nhà hàng
                            </p>
                            <p>
                                <strong>Chiều:</strong>
                                Doan di tham quan
                            </p>
                            <p><strong>Cố đô Hoa Lư</strong>
                                là quần thể di tích lịch sử đất nước đặc biệt quan trọng của nước ta.
                                Đây
                                cũng là một trong bốn vùng lõi của quần thể di sản thế giới Tràng An đã
                                được
                                UNESCO công nhận.</p>
                            <p> <strong>Tuyệt tình cốc </strong>
                                địa danh thắng cảnh này là Động An Tiêm thuộc quần thể hang động của di
                                tích
                                Cố đô Hoa Lư. Khi bước chân đến khu vực chùa An Tiêm, du khách sẽ cảm
                                nhận
                                được vẻ đẹp đầy tĩnh mịch. Từ trên cao, bạn sẽ được chiêm ngưỡng vẻ đẹp
                                sơn
                                thủy hoang sơ nhưng không kém phần thơ mộng
                            </p>
                            <p>
                                <strong>Tối:</strong>
                                an toi tai nha hang
                            </p>
                        </div>
                        <div class="buy-now">
                            <span class="buy-now-price">
                                <i class="fa fa-money"></i>
                                6.990.000 VND
                            </span>
                            <a href="" class="buy-now-link"> Đặt ngay</a>
                        </div>
                        <div class="other-schedule">
                            <div class="other-schedule-heading schedule-heading">
                                <i class="fa fa-check-square-o"></i>
                                <span>
                                    NGÀY KHỞI HÀNH KHÁC
                                </span>
                            </div>
                            <div class="other-schedule-content">
                                <table class="other-schedule-list">
                                    <tbody>
                                        <tr class="list">
                                            <td style="width:23%;">Mã tour</td>
                                            <td style="width:20%; text-align: center;">Ngày khởi
                                                hành</td>
                                            <td style="width:18%; text-align: center;">Giá</td>
                                            <td style="width:15%;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="text-align: center;">Hiện tại chưa có
                                                lịch khởi hành khác!</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="schedule-note">
                            <div class="schedule-note-heading">
                                <i class="fa fa-check-square-o"></i>
                                Lưu ý
                            </div>
                            <div class="schedule-note-content">
                                <p>
                                    <strong>Sang:</strong>
                                    Xe máy lạnh, đưa đón khách đi theo chương trình trong tour.
                                    Vé máy bay khứ hồi SGN-HAN-SGN
                                    Hành lý : 07kg xách tay + 15kg ký gửi
                                    Vé tham quan theo chương trình tour:
                                    Thuyền thăm quan vịnh Hạ Long, thuyền thăm KDL Tràng An
                                    Vé vào cửa tham quan các điểm theo chương trình
                                    Ăn uống theo chương trình, được đổi món thường xuyên theo ẩm thực địa
                                    phương.
                                    05 bữa sáng: tại khách sạn
                                    11 bữa chính: theo thực đơn Setmenu
                                    Khách sạn tiêu chuẩn 2-3 khách/phòng, tivi, tủ lạnh, điện thoại, nước
                                    nóng
                                    vệ sinh
                                    riêng.
                                    HDV thuyết minh và phục vụ đoàn suốt tuyến.
                                    Quà tặng nón du lịch.
                                    Khăn lạnh, nước uống trên đường (01 khăn, 01 chai/ ngày).
                                    Bảo hiểm du lịch trọn tour: mức bồi thường tối đa
                                    100.000.000đ/khách/trường
                                    hợp, bồi
                                    thường theo quy tắc và tỉ lệ thương tật của công ty BH Hàng Không
                                    Thuế VAT
                                </p>
                                <p>
                                    <strong>Trua:</strong>
                                    Đoàn dùng bữa trưa tại nhà hàng
                                </p>
                                <p>
                                    <strong>Chieu</strong>
                                    Doan di tham quan
                                </p>
                                <p><strong>Cố đô Hoa Lư</strong>
                                    là quần thể di tích lịch sử đất nước đặc biệt quan trọng của nước ta.
                                    Đây
                                    cũng là một trong bốn vùng lõi của quần thể di sản thế giới Tràng An đã
                                    được
                                    UNESCO công nhận.</p>
                                <p> <strong>Tuyệt tình cốc </strong>
                                    địa danh thắng cảnh này là Động An Tiêm thuộc quần thể hang động của di
                                    tích
                                    Cố đô Hoa Lư. Khi bước chân đến khu vực chùa An Tiêm, du khách sẽ cảm
                                    nhận
                                    được vẻ đẹp đầy tĩnh mịch. Từ trên cao, bạn sẽ được chiêm ngưỡng vẻ đẹp
                                    sơn
                                    thủy hoang sơ nhưng không kém phần thơ mộng
                                </p>
                                <p>
                                    <strong>Toi:</strong>
                                    an toi tai nha hang
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 m-15px-tb blog-aside mgt-15px">
            <!-- tour liên quan -->
            <div class="widget widget-tour">
                <div class="widget-title">
                    <div class="tour-heading">
                        <i class="fa fa-link"></i>
                        TOUR LIÊN QUAN
                    </div>
                </div>
                <div class="widget-body">
                    <div class="thumbnail block-tour shadow rounded-lg tour">
                        <a href=""><img src="asset/img/635f9d3f554e2.jpg " class="img-thumbnail" alt=""></a>
                        <div class="caption">
                            <a class="title-tour " href="">
                                <p>Du Lịch Hàn Quốc Miễn Visa: Yang Yang - Núi Seorak - Gangwon - Đảo Nami -
                                    Seoul 6N5Đ</p>
                            </a>
                            <div class="location">
                                <i class="fa fa-flag"></i>
                                <span>Ho Chi Minh</span>
                            </div>
                            <i class="fa fa-clock-o"></i>
                            <span>04/11/2022</span>
                        </div>
                        <div class="tour-bottom">
                            <div class="tour-price">
                                <i class="fa fa-money"></i>
                                <span class="price">6.990.000 VND</span>
                            </div>
                            <a href="" class="schedule-buy-now">ĐẶT NGAY</a>
                        </div>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="thumbnail block-tour shadow rounded-lg tour">
                        <a href=""><img src="asset/img/635f9d3f554e2.jpg " class="img-thumbnail" alt=""></a>
                        <div class="caption">
                            <a class="title-tour " href="">
                                <p>Du Lịch Hàn Quốc Miễn Visa: Yang Yang - Núi Seorak - Gangwon - Đảo Nami -
                                    Seoul 6N5Đ</p>
                            </a>
                            <div class="location">
                                <i class="fa fa-flag"></i>
                                <span>Ho Chi Minh</span>
                            </div>
                            <i class="fa fa-clock-o"></i>
                            <span>04/11/2022</span>
                        </div>
                        <div class="tour-bottom">
                            <div class="tour-price">
                                <i class="fa fa-money"></i>
                                <span class="price">6.990.000 VND</span>
                            </div>
                            <a href="" class="schedule-buy-now">ĐẶT NGAY</a>
                        </div>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="thumbnail block-tour shadow rounded-lg tour">
                        <a href=""><img src="asset/img/635f9d3f554e2.jpg " class="img-thumbnail" alt=""></a>
                        <div class="caption">
                            <a class="title-tour " href="">
                                <p>Du Lịch Hàn Quốc Miễn Visa: Yang Yang - Núi Seorak - Gangwon - Đảo Nami -
                                    Seoul 6N5Đ</p>
                            </a>
                            <div class="location">
                                <i class="fa fa-flag"></i>
                                <span>Ho Chi Minh</span>
                            </div>
                            <i class="fa fa-clock-o"></i>
                            <span>04/11/2022</span>
                        </div>
                        <div class="tour-bottom">
                            <div class="tour-price">
                                <i class="fa fa-money"></i>
                                <span class="price">6.990.000 VND</span>
                            </div>
                            <a href="" class="schedule-buy-now">ĐẶT NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End tour liên quan -->
        </div>
    </div>
</div>