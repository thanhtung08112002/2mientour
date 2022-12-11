<!-- thuộc mục danh sách tour du lịch -->
<!-- hiển thị thông tin về tác tour du lịch trong  thành phố -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách tour du lịch</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã tour</th>
                            <th>Tên tour</th>
                            <th>Phương tiện</th>
                            <th>Tên địa điểm khởi hành</th>
                            <th>Thời gian đi</th>
                            <th>Ảnh đại diện tour</th>
                            <th>Loại tour</th>
                            <th>Giá tiền</th>
                            <th>Xem thêm</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($filterTourWithMaThanhPho as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $ma_tour ?></td>
                                <td><?= $ten_tour ?></td>
                                <td><?= $phuong_tien ?></td>
                                <td><?= $ten_dia_diem_khoi_hanh ?></td>
                                <td><?= $thoi_gian_di ?></td>
                                <td><img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh_dai_dien_tour ?>" alt=""></td>
                                <td><?= $loai_tour ?></td>
                                <td><?= $gia_tien ?></td>
                                <td><a  class="btn btn-primary" href="<?= ROOT ?>admin_list_tour/mien/thanh_pho/?ma-tour=<?= $ma_tour ?>">Chi tiết</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>