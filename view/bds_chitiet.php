<div class="content-area">

                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs text-center">
                    <div class="container">
                        <div class="page-header">
                            <h1>Portfolio</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Portfolio</li>
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE WITH SIDEBAR -->
                <section class="page-section sub-page">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12 project-media">
                                <?php
                                extract($onebds);
                                ?>
                                <div class="img-carousel">
                                    <div><img src="<?=$img?>" alt=""/></div>
                                    <div><img src="assets/img/preview/portfolio/portfolio-x7.jpg" alt=""/></div>
                                    <div><img src="assets/img/preview/portfolio/portfolio-x8.jpg" alt=""/></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-5 col-sm-7">
                                <div class="project-overview">
                                    <h3 class="block-title"><span><?=$name?></span></h3>
                                    <p><?=$info?></p>
                                </div>

                                <div class="project-details">
                                    <h3 class="block-title"><span>Thông tin chi tiết</span></h3>
                                    <dl class="dl-horizontal">
                                        <dt>Giá</dt>
                                        <dd><?=$price?> tỷ</dd>
                                        <dt>Diện tích</dt>
                                        <dd><?=$dientich?> m²</dd>
                                        <dt>Địa chỉ</dt>
                                        <dd><?=$location?></dd>
                                    </dl>
                                </div>
                            </div>

                        </div>

                        <hr class="page-divider"/>

                        <div class="pager">
                            <a class="btn btn-theme btn-theme-transparent pull-left btn-icon-left" href="#"><i class="fa fa-angle-double-left"></i>Older</a>
                            <a class="btn btn-theme btn-theme-transparent pull-right btn-icon-right" href="#">Newer <i class="fa fa-angle-double-right"></i></a>
                        </div>

                        <hr class="page-divider half"/>

                        <h2 class="block-title">Bất động sản liên quan</h2>

                        <div class="row thumbnails portfolio">
                            <?php
                            foreach($bds_cungloai as $same_bds){
                                extract($same_bds);
                                $linkbds = "index.php?act=batdongsanchitiet&idbds=" . $id;
                                echo '
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a href="'.$linkbds.'"><img src="'.$img.'" alt=""></a>
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <h3 class="caption-title"><a href="'.$linkbds.'">'.$name.'</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                            ?>
                        </div>

                    </div>
                </section>
                <!-- /PAGE WITH SIDEBAR -->

            </div>
            <!-- /CONTENT AREA -->