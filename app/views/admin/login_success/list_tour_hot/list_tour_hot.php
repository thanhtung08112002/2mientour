<article>
    <div class="horizontal-menu">
        <div class="user">
            <p class="user-name">Mot Hai Ba</p>
            <img src="images.jfif" alt="">
        </div>
    </div>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH TOUR HOT</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Mã số hot</td>
                    <td>Loại tour</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($tour_hot as $th) : ?>
                    <?php extract($th) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $ma_so_hot ?></td>
                        <td><?= $loai_tour ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- end bảng -->
</article>