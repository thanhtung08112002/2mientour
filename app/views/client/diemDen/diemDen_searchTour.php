<div class="secarch-tour">
                            <div class="secarch-tour-heading">
                                Tìm Tuor
                            </div>
                            <div class="search-tour-content">
                                <form method="GET" action="result-search" name="frn" onsubmit="return validete()">
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
                                        <i class="fa fa-search">Tìm Kiếm</i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="contact">
                            <div class="contact-heading">
                                <i class="fa fa-building-o"></i>
                                Lien he
                            </div>
                            <div class="contact-content">
                                <ul style="list-style: none; padding-left: 0">
                                    <li>
                                        <?= $ten_cong_ty ?>
                                    </li>
                                    <li>
                                        <strong> Trụ sở:</strong> <?= $dia_chi ?>
                                    </li>
                                    <li>
                                        <strong>Tel: </strong><a href="tel:<?= $tel ?>"><?= $tel ?></a>
                                    </li>
                                    <li>
                                        <strong>Fax: </strong><a href="tel:<?= $fax ?>"><?= $fax ?></a>
                                    </li>
                                    <li>
                                        <strong>Email: </strong><a href="mailto:<?= $email ?>"><?= $email ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>