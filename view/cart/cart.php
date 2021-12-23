<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giỏ Hàng</h2>		
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- cart content section start -->
<section class="pages cart-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-responsive padding60">
					<table class="wishlist-table text-center" id="dxd" >
						<thead style="background-color: #CF111A;">
							<tr >
								<th>Sản phẩm</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Thành tiền</th>
								<th>Xóa</th>
							
							</tr>
						</thead>
						<tbody>
							<?php
							if (isset($_SESSION['sanpham'])) {
								foreach ($_SESSION['sanpham'] as $value) { ?>
									<tr>
										<td class="td-img text-left">
											<a href="?act=detail&id=<?= $value['bookid'] ?>"><img src="public/<?= $value['bookimageurl'] ?>" alt="Add Product" /></a>
											<div class="items-dsc">
												<h5><a href="?act=detail&id=<?= $value['bookid'] ?>"><?= $value['bookname'] ?></a></h5>
											</div>
										</td>
										<td><?= number_format($value['price']) ?> VNĐ</td>
										<td>
											<form action="" method="POST">
												<div class="plus-minus">
													<a href="?act=cart&xuli=delete&id=<?=$value['bookid']?>" class="dec qtybutton" type="button">-</a>
													<b class="plus-minus-box"><?= $value['quantity'] ?></b>
													<a href="?act=cart&xuli=update&id=<?=$value['bookid']?>" class="inc qtybutton" type="button">+</a>
												</div>
											</form>
										</td>
										<td>
											<strong><?= number_format($value['ThanhTien']) ?> VNĐ</strong>
										</td>
										<td><a href="?act=cart&xuli=delete&id=<?= $value['bookid'] ?>"><i class="mdi mdi-close" title="Remove this product"></i></td>
											
											
									</tr>
								
							<?php }
						
							} ?>
							
						</tbody>
						
					</table>
					
  						<div class="row">
						  <div class="col-xs-6 col-sm-4"></div>
						<div class="col-xs-6 col-sm-4"></div>
						<div class="clearfix visible-xs-block"></div>			
   						 <div  class="col-xs-6 col-sm-4">
							<?php if (isset($_SESSION['sanpham'])) { ?>
								<span class="pull-right"><a href="?act=cart&xuli=deleteall"> Xóa tất cả</a></span>
							<?php } ?>
							</div>
  					</div>
					  
					
			
			</div>
		</div>
		<div class="row margin-top">
			<div class="col-sm-12">
				<div class="single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Chi tiết thanh toán</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<form action="?act=checkout" method="post">
							<table>
								<tbody>
									<tr>
										<th>Tổng Giỏ Hàng</th>
										<td><?= number_format($count) ?> VNĐ</td>
									</tr>
									
									
									<tr>
										<th>Thuế VAT</th>
										<td>0 VNĐ</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th class="tfoot-padd">Tổng tiền</th>
										<td class="tfoot-padd"><?=number_format($count)?> VNĐ</td>
									</tr>
								</tfoot>
							</table>
							<div class="submit-text coupon">
								
								<button type="submit" class="btn" style="background-color: #CF111A; color: white;margin-left:10px">
                                <i >Đặt hàng</i>
                            </button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
			
			</div>
		</div>
	</div>
</section>
<!-- cart content section end -->