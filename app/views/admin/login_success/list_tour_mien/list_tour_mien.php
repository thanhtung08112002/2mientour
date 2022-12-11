<!-- thuộc mục danh sách tour du lịch -->
<!-- hiển thị thông tin về thành phố trong  miền -->
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
                            <th>Mã Thành Phố</th>
                            <th>Tên thành phố</th>
                            <th>Xem thêm</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($getInforCityWithMaMien as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $ma_thanh_pho ?></td>
                                <td><?= $ten_thanh_pho ?></td>
                                <td ><a class="btn btn-primary" href="<?= ROOT ?>admin_list_tour/mien/?ma-thanh-pho=<?= $ma_thanh_pho ?>">Chi tiết</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>