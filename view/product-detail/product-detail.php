<!-- pages-title-start -->
<?php if ($data != null) { ?>
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2> Thông tin sách </h2>
                      
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    <!-- product-details-section-start -->
    <div class="product-details pages section-padding-top">
        <div class="container">
            <div class="row">
                <div class="single-list-view">
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <div class="quick-image">
                            <div class="single-quick-image text-center">
                                <div class="list-img">
                                    <div class="product-f tab-content">
                                        <?php if ($data['bookimageurl'] !=  null) { ?>
                                            <div class="simpleLens-container tab-pane fade in" id="sin-1">
                                                <a class="simpleLens-image" data-lens-image="public/<?= $data['bookimageurl'] ?>" href="#"><img src="public/<?= $data['bookimageurl'] ?>" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data['bookimageurl'] != null) { ?>
                                            <div class="simpleLens-container tab-pane active fade in" id="sin-2">
                                                <a class="simpleLens-image" data-lens-image="public/<?= $data['bookimageurl'] ?>" href="#"><img src="public/<?= $data['bookimageurl'] ?>" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data['bookimageurl'] != null) { ?>
                                            <div class="simpleLens-container tab-pane fade in" id="sin-3">
                                                <a class="simpleLens-image" data-lens-image="public/<?= $data['bookimageurl'] ?>" href="#"><img src="public/<?= $data['bookimageurl'] ?>" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-thumb">
                                <ul class="product-slider">
                                    <?php if ($data['bookimageurl'] != null) { ?>
                                        <li class="active"><a data-toggle="tab" href="#sin-1"> <img src="public/<?= $data['bookimageurl'] ?>" alt="quick view" /> </a></li>
                                    <?php } ?>
                                    <?php if ($data['bookimageurl'] != null) { ?>
                                        <li><a data-toggle="tab" href="#sin-2"> <img src="public/<?= $data['bookimageurl'] ?>" alt="small image" /> </a></li>
                                    <?php } ?>
                                    <?php if ($data['bookimageurl'] != null) { ?>
                                        <li><a data-toggle="tab" href="#sin-3"> <img src="public/<?= $data['bookimageurl'] ?>" alt="small image" /> </a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-8">
                        <div class="quick-right">
                            <div class="list-text">
                                <h3><?= $data['bookname'] ?></h3>
                                <div class="ratting floatright">
                                    <p>( 27 Rating )</p>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-half"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                </div>
                                <h5><?=number_format($data['price'])?> VNĐ</h5>
                                <h3>Tác giả: <?=($data_tg['authorname'])?> </h3>
                                    </br>
                                <?php if ($data['categoryid'] == 1) { ?>
                                    <p><?= $data['bookdescription'] ?></p>
                                <?php }?>
                                <div class="list-btn">
                                    <a href="?act=cart&xuli=add&id=<?=$data['MaSP']?>">Thêm vào giỏ</a>
                                    <?php if ($data['categoryid'] == 1) { ?>
                                    <a href="#info">Chi tiết</a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-product item end -->
            <!-- reviews area start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="reviews padding60 margin-top">
                        <ul class="reviews-tab clearfix" id="info">
                            <?php if ($data['categoryid'] == 1) { ?>
                                <li class="active"><a data-toggle="tab" href="#moreinfo">Đặc điểm</a></li>
                            <?php } ?>
                            <li><a data-toggle="tab" href="#reviews">Đánh giá</a></li>
                        </ul>
                        <div class="tab-content">
                            <?php if ($data['categoryid'] == 1) { ?>
                                <div class="info-reviews moreinfo tab-pane fade in active" id="moreinfo">
                                    <div class="tb">
                                        <h5>Thông tin sách </h5>
                                        <ul>
                                            <li>
                                                <span>Tên sách</span>
                                                <div><?= $data['bookname'] ?></div>
                                            </li>
                                            <li>
                                                <span>Danh mục sách: </span>
                                                <div><?= $data_dm['categoryname'] ?></div>
                                            </li>
                                            <li>
                                                <span>Tác giả</span>
                                                <div><?= $data_tg['authorname'] ?></div>
                                            </li>
                                            <li>
                                                <span>Giá:</span>
                                                <div><?= $data['price'] ?></div>
                                            </li>
                                            <li>
                                                <span>Mô tả:</span>
                                                <div><?= $data['bookdescription'] ?></div>
                                            </li>
                                            <li>
                                                <span>Số trang</span>
                                                <div><?= $data['bookpages'] ?></div>
                                            </li>
                                            <li>
                                                <span>Cân nặng</span>
                                                <div><?= $data['bookweight'] ?></div>
                                            </li>
                                            <li>
                                                <span>Ngày phát hành</span>
                                                <div><?= $data['releasedate'] ?></div>
                                            </li>
                                            <li>
                                                <span>Lượt xem</span>
                                                <div><?= $data['viewcount'] ?></div>
                                            </li>
                                            <li>
                                                <span>Đã bán</span>
                                                <div><?= $data['purchasedcount'] ?></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- reviews area end -->
        </div>
    </div>
    <!-- product-details section end -->
    <!-- related-products section start -->
   
<?php } 
