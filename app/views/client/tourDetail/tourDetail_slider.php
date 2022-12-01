<div class="panel-img">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $i = 0;?>
                            <?php foreach ($getImgWithMaTour as $item) : ?>
                                <?php extract($item) ?>
                                <?php $i++;?>
                                <?php $active = 'active'?>
                                
                                <div class="carousel-item <?= $i == 1?$active:""?>">
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