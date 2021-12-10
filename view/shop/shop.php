<!DOCTYPE html>
<html lang="vi">
<head>	

	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="public/css/home.css">
    <script type="text/javascript" src="public/js/main1.js"></script>
    <link rel="stylesheet" href="public/fonts/fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    
    
    <link rel="stylesheet" type="text/css" href="././public/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="public/slick/slick-theme.css" />
    <script type="text/javascript" src="public/slick/slick.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://dealbook.xyz/">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <style>img[alt="www.000webhost.com"]{display: none;}</style>
</head>	

<body>
	<?php
	require_once("./view/header_footer/header.php")
	?>

  
</br>
    <!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
               <!--   <li class="breadcrumb-item"><a href="index.html">Sách</a></li>-->
                
            </ol>
        </div>
    </section>

    

   

    <section class="content my-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <!-- header của khối sản phẩm : tag(tác giả), bộ lọc và sắp xếp  -->
                <div class="header-khoi-sp d-flex">
                    <div class="tag">
                        <label>Tác giả nổi bật:</label>
                        <a href="#">Tất cả</a>
                        <a href="#" data-tacgia=".MarieForleo">Marie Forleo</a>
                        <a href="#" data-tacgia=".DeanGraziosi">Dean Graziosi</a>
                        <a href="#" data-tacgia=".DavikClark">Davik Clark</a>
                        <a href="#" data-tacgia=".TSLêThẩmDương">TS Lê Thẩm Dương</a>
                        <a href="#" data-tacgia=".SimonSinek">Simon Sinek</a>
                    </div>
                    
                </div>
                
                <!-- các sản phẩm  -->
                <div class="items">
                    <div class="row">
                    
                    <?php if(isset($value))  { ?>
                        <?php foreach($value as $row) { ?>
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                                
                                <div class="card ">
                                    <a href="?act=detail&id=<?=$row['bookid']?>" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                        <img class="card-img-top anh" src="././public/<?php  echo $row['bookimageurl'] ?>"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten"><?php  echo $row['bookname'] ?></h6>
                                           
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi"><?php  echo $row['price'] ?> ₫</div>
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
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }?>
                            <?php }?>
                     
                    </div>
                </div>


                <!--het khoi san pham-->
            </div>
            <!--het div noidung-->
        </div>
        <!--het container-->
    </section>
    <!--het _1khoi-->

    

  
   

	<?php
	require_once("./view/header_footer/footer.php")
	?>
</body>