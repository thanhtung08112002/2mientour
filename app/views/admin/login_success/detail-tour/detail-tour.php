<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-gray-800">Danh sách tour du lịch</h1>
    <!-- DataTales Example -->
    <br>
    <h2 class="h3 mb-2 text-gray-800">Lịch khởi hành tour du lịch</h2>
    <div class="card shadow mb-4">
        <div class="card-body">
        <a href=""class="btn btn-primary">Thêm ngày khởi hành</a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên tour</th>
                            <th>Mã tour theo ngày khởi hành</th>
                            <th>Ngày khởi hành</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($filterTourDetail as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $ten_tour ?></td>
                                <td><?= $id_tour_lite ?></td>
                                <td><?= $ngay_khoi_hanh ?></td>
                                <td><a href="" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>||<a href="" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <h2 class="h3 mb-2 text-gray-800">Lịch trình tour du lịch</h2>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
            <a href=""class="btn btn-primary">Thêm lịch trình</a>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã tour</th>
                            <th>Ngày</th>
                            <th>Nội dung ngày</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($schedule_tour as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $ma_tour ?></td>
                                <td><?= $ngay ?></td>
                                <td><?= $noi_dung_ngay?></td>
                                <td><a href="<?= ROOT?>admin_list_tour/mien/thanh_pho/?id-lich-trinh=<?= $id?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>||<a href=""class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
