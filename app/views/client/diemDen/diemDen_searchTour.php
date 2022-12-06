<div class="secarch-tour">
    <div class="secarch-tour-heading">
        Tìm Tuor
    </div>
    <div class="search-tour-content">
        <form method="GET" action="<?= ROOT ?>tour/result-search" name="frn" onsubmit="return validete()">
            <div class="form-group ">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="valueSearch" placeholder="Nhập tên, Vị trí, Địa danh,...">
                <p id="loinhaptext" style="color: red;"></p>
            </div>
            <select id="inputState" class="form-control" name="listCity">
                <option value="">Thành phố</option>
                <?php
                foreach ($getAllThanhPho as $item) :
                ?>
                    <?php extract($item) ?>
                    <option value="<?= $ma_thanh_pho ?>"><?= $ten_thanh_pho ?></option>
                <?php endforeach ?>
            </select>
            <button type="submit" class="btn btn-warning  btn-lg btn-block" name="btn_search_tour">
                <i class="fa fa-search"></i>Tìm Kiếm
            </button>
        </form>
    </div>
</div>
<div class="contact">
    <!-- sửa lại css -->
    <div class="contact-heading">
        <i class="fa fa-building-o"></i>
        LIÊN HỆ
    </div>
    <div class="contact-content">
        <ul class="contact-content-list">
            <li style="padding-left: 8px; font-size: 1.5rem; font-weight: 700;">
                <?= $ten_cong_ty ?>
            </li>
            <li>
                <strong> Trụ sở:</strong> <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+Cao+%C4%91%E1%BA%B3ng+FPT+Polytechnic/@21.0381278,105.7445984,17z/data=!3m1!4b1!4m5!3m4!1s0x313454b991d80fd5:0x53cefc99d6b0bf6f!8m2!3d21.0381278!4d105.7467871?hl=vi"><?= $dia_chi_cong_ty ?></a>
            </li>
            <li>
                <strong>Tel: </strong><a href="tel:<?= $tel ?>"><?= $tel ?></a>
            </li>
            <li>
                <strong>Fax: </strong><a href="tel:<?= $fax ?>"><?= $fax ?></a>
            </li>
            <li>
                <strong>Email: </strong><a href="mailto:<?= $email_cong_ty ?>"><?= $email_cong_ty ?></a>
            </li>
        </ul>
    </div>
    <!-- kết thúc sửa css -->
</div>