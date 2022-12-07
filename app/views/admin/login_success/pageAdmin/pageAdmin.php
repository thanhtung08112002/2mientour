<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Doanh thu</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= currency_format($tong) ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Thanh toán tiền</div>
                            <?php foreach ($tong_tien_thanh_toan_khac_vnpay as $item) : ?>
                                <?php extract($item) ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= currency_format($tong_tien_thanh_toan_binh_thuong) ?></div>
                            <?php endforeach ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Thanh toán qua VNPAY
                            </div>
                            <div class="row no-gutters align-items-center">
                                <?php foreach ($tong_tien_thanh_toan_vnpay as $item) : ?>
                                    <?php extract($item) ?>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= currency_format($tong_tien_thanh_toan_online) ?></div>
                                <?php endforeach ?>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Tổng số lượng tour hiện có</div>
                            <?php foreach ($tong_so_tour_hien_co as $item) : ?>
                                <?php extract($item) ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tong_so_tour_hien_co ?> tour</div>
                            <?php endforeach ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="bieu_do">
            <!-- Pie Chart -->
            <div class=" col-xl-4 col-lg-5">
                <div class="card shadow mb-4">

                    <!-- Card Body -->
                    <div class="card-body">
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load("current", {
                                packages: ["corechart"]
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([

                                    ['Mã tour', 'Số lượng'],
                                    <?php foreach ($thong_ke_so_luong_tour_thanh_toan as $item) : ?>
                                        <?php extract($item) ?>["<?= $ten_tour ?>", <?= $so_luong ?>],
                                    <?php endforeach ?>
                                ]);
                                var options = {
                                    title: 'Thống kê số lương tour đã thanh toán',
                                    is3D: true,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                chart.draw(data, options);
                            }
                        </script>

                        <div id="piechart_3d" style="width: 800px; height: 500px;"></div>

                    </div>
                </div>
            </div>
            <div class=" col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ['corechart']
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ["Element", "Density", {
                                    role: "style"
                                }],
                                <?php foreach ($thong_ke_gia_tien_tour as $item) : ?>
                                    <?php extract($item) ?>["<?= $ten_tour ?>", <?= $gia_tien ?>, "#3366cc"],
                                <?php endforeach ?>
                            ]);

                            var view = new google.visualization.DataView(data);
                            view.setColumns([0, 1,
                                {
                                    calc: "stringify",
                                    sourceColumn: 1,
                                    type: "string",
                                    role: "annotation"
                                },
                                2
                            ]);

                            var options = {
                                title: "Thống kê giá tiền tăng dần theo tour (VNĐ)",
                                width: 600,
                                height: 400,
                                bar: {
                                    groupWidth: "95%"
                                },
                                legend: {
                                    position: "none"
                                },
                            };
                            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                            chart.draw(view, options);
                        }
                    </script>
                    <div id="columnchart_values" style="width: 400px; height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->