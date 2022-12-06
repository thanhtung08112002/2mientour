<!-- thuộc mục danh sách tour du lịch -->
<!-- hiện thị thông tin về miền -->
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
                            <th>Mã miền</th>
                            <th>Tên miền</th>
                            <th>Mô tả</th>
                            <th>Xem thêm</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($getAllMien as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td><?= $ma_mien ?></td>
                                <td><?= $ten_mien ?></td>
                                <td><?= $mo_ta ?></td>
                                <td><a href="<?= ROOT ?>admin_list_tour/?ma-mien=<?= $ma_mien ?>">Chi tiết</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>