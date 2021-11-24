<!DOCTYPE html>
<html lang="vi">

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="public/css/animate.css">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="public/css/materialdesignicons.min.css">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="public/css/jquery.simpleLens.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="public/css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="public/css/meanmenu.min.css">
    <!-- nivo.slider css -->
    <link rel="stylesheet" href="public/css/nivo-slider.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="public/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="public/css/responsive.css">
    <!-- modernizr js -->
    <script src="public/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<?php
    require_once("./view/header_footer/header.php")
    ?>

<div class="d-flex p-3 bg-warning text-white" style="margin: 20px 0px 20px 0px">  
    <div class="p-2 bg-success">Danh Mục Sách</div>
    




        <a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a>
       


    <?php  if ((isset($_SESSION['isLogin_Admin'])  == true)) : ?>
      
        <h2> Xin chào admin </h2>
    <?php elseif((isset($_SESSION['isLogin'])  == true)) : ?>
                 <h2> Xin chào  </h2>
    <?php else : ?>
          <a href="?act=taikhoan">Đăng nhập</a>
    <?php endif ?>
      
   
     
    
</div>
                    <div class="container" style="margin-top:20px ">
                    <?php         
                foreach($posts as $post ) :  ?>
                    <div class="col-3 card" style="margin-top:10px;  display:inline-block">
				    <img class="card-img-top img-sach" src="./public/<?php echo $post['bookimageurl']?>" alt="Card image" style="width:100%">
				    <div class="card-body">
				      <h5 class="card-title"><?php echo $post['bookname']?></h5>
				      <div class="row" style="margin-left: 0px">
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
						</div>
				      <p class="card-text">Giá : <?php echo number_format( $post['price'])?>đ                          
				    <a href="?act=detail&id=<?=$post['bookid']?>" style="margin-left: 15px"class="btn btn-primary stretched-link">Xem chi tiết</a></p>
				      
				    </div>
				</div>     
                <?php  endforeach ?>
                </div>
</body>
</html>               
       
    

   
   
