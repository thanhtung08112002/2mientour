<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-gray-800">Danh sách chi tiết tour du lịch</h1>
    <!-- DataTales Example -->
    <br>
    <h2 class="h3 mb-2 text-gray-800">Lịch khởi hành tour du lịch</h2>
    <div class="card shadow mb-4">
        <div class="card-body">
        

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã tour</th>
                            <th>Tên tour</th>
                            <th>Mã tour theo ngày khởi hành</th>
                            <th>Ngày khởi hành</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($filterTourDetail as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $ma_tour ?></td>
                                <td><?= $ten_tour ?></td>
                                <td><?= $id_tour_lite ?></td>
                                <td><?= $ngay_khoi_hanh ?></td>
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
          

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã tour</th>
                            <th>Ngày</th>
                            <th>Nội dung ngày</th>
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
                                <td style="text-align: initial;"><?= $noi_dung_ngay?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <h2 class="h3 mb-2 text-gray-800">Ảnh tour du lịch</h2>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
       

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã tour</th>
                            <th>Ảnh</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($imgTourDetail as $item) : ?>
                            <?php extract($item) ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $ma_tour ?></td>
                                <td><img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh ?>" alt=""></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
