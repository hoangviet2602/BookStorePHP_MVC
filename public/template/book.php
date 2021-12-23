<!DOCTYPE html>
<html lang="vi">

<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./public/css/home.css">
    <script type="text/javascript" src="./public/js/main1.js"></script>
    <link rel="stylesheet" href="./public/fonts/fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    
    
    <link rel="stylesheet" type="text/css" href="./public/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./public/slick/slick-theme.css" />
    <script type="text/javascript" src="./public/slick/slick.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://dealbook.xyz/">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <style>img[alt="www.000webhost.com"]{display: none;}</style>

    
  
</head>

<body>
<?php
    require_once("view/header_footer/header.php")
?>


    
    <section class="header bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-right: -15px;">
                    <!-- CATEGORIES -->
                    <div class="categorycontent">
                    <ul>
                            <?php foreach($category as $item) { ?>
                               
                                <li> <a href="?act=category1&id=<?=$item['categoryid']?>"> <?php echo $item['categoryname'] ?></a><li>
                                
                            </li>
                            <?php } ?>
                            </ul>                
                       
                    </div>
                </div>
                <!-- banner slider  -->
                <div class="col-md-9 px-0">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="nutcarousel carousel-indicators rounded-circle">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img src="./public/img/banner-sach-moi.jpg" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <div class="carousel-item ">
                                <a href="#"><img src="./public/img/banner-beethoven.jpg" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="images/neu-toi-biet-duoc-khi-20-full-banner.jpg" class="img-fluid"
                                        style="height: 386px;" alt="Third slide"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>           
     <!-- khoi sach moi  -->
     <section class="_1khoi sachmoi bg-white">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">SÁCH BÁN CHẠY NHẤT</h1>
                        <a href="sach-moi-tuyen-chon.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 san pham -->
                   <?php foreach ($posts as  $post) { ?>  
                    <div class="card">
                        <a href="?act=detail&id=<?=$post['bookid']?>" class="motsanpham"
                            style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                            title="<?=$post['bookname']?>">
                            <img class="card-img-top anh" src="public/<?=$post['bookimageurl']?>" >
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten"><?=$post['bookname']?></h3>
                                <small class="tacgia text-muted"><?=$post['authorname']?></small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi"><?=number_format($post['price'])?> ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                   
                                </div>
                                
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                                <div class="nutmua btn w-100 text-uppercase">
                                    <a href="?act=cart&xuli=add&id=<?=$post['bookid']?>">Thêm vào giỏ</a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>     
                </div>
            </div>
        </div>
    </section>

    </section>           
     <!-- khoi sach moi  -->
     <section class="_1khoi sachmoi bg-white">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">COMBO SÁCH HOT - GIẢM ĐẾN 25%</h1>
                        <a href="sach-moi-tuyen-chon.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 san pham -->
                   <?php foreach ($posts4 as  $post) { ?>  
                    <div class="card">
                        <a href="?act=detail&id=<?=$post['bookid']?>" class="motsanpham"
                            style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                            title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                            <img class="card-img-top anh" src="public/<?=$post['bookimageurl']?>"
                                alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten"><?=$post['bookname']?></h3>
                                <small class="tacgia text-muted"><?=$post['authorname']?></small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi"><?=number_format($post['price'])?> ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>   
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                                <div class="nutmua btn w-100 text-uppercase">
                                    <a href="?act=cart&xuli=add&id=<?=$post['bookid']?>">Thêm vào giỏ</a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>     
                </div>
            </div>
        </div>
    </section>

    <!-- khoi sach sap phathanh  -->
    <section class="_1khoi sapphathanh mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH SẮP PHÁT HÀNH / ĐẶT TRƯỚC</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                <?php foreach ($posts3 as  $post) { ?>  
                    <div class="card">
                        <a href="?act=detail&id=<?=$post['bookid']?>" class="motsanpham"
                            style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                            title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                            <img class="card-img-top anh" src="public/<?=$post['bookimageurl']?>"
                                alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten"><?=$post['bookname']?></h3>
                                <small class="tacgia text-muted"><?=$post['authorname']?></small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi"><?=number_format($post['price'])?> ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>   
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>             </div>
                        </a>
                    </div>
                <?php } ?>  
                    
                </div>
            </div>
        </div>
    </section>

    <!-- div _1khoi -- khoi sachnendoc -->
    <section class="_1khoi sachnendoc bg-white mt-4">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH HAY NÊN ĐỌC</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                    <!-- 1 san pham -->
                  
                    <?php foreach ($posts2 as  $post) { ?>  
                        <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="<?=$post['bookname']?>">
                                <img class="card-img-top anh" src="public/<?=$post['bookimageurl']?>"
                                    >
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten"><?=$post['bookname']?></h3>
                                    <small class="thoigian text-muted"><?=$post['releasedate']?></small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>  
                </div>
            </div>
            <hr>
        </div>
    </section>
   

              
    <?php
    require_once("view/header_footer/footer.php")
    ?>


</body>
</html>               
       
    

   
   