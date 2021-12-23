 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
 style="background-image: linear-gradient(180deg,#CF111A 10%,#3399FF);">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
 
  <div class="sidebar-brand-text mx-3">BookStore</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">




<!-- Nav Item - Charts -->
<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
<li class="nav-item" >
  <a class="nav-link" href="?mod=nguoidung">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý Tài khoản</span></a>
</li>
<?php } ?>
<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="?mod=sanpham">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý Sản phẩm</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="?mod=danhmuc">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý danh mục sản phẩm</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="?mod=hoadon">
    <i class="fas fa-fw fa-table"></i>
    <span>Xét duyệt hóa đơn</span></a>
</li>






</ul>
<!-- End of Sidebar -->