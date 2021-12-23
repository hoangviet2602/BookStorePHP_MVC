<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Order Complete</h2>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- order-complete content section start -->
<section class="pages checkout order-complete section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="complete-title">
					<p>Đặt Hàng Thành Công</p>
					<p>Vui Lòng Chờ Xét Duyệt</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>ĐƠN ĐẶT HÀNG CỦA BẠN</strong></h3>
					</div>
					<div class="cart-form-text pay-details">
						<table>
							<thead>
								<tr>
									<th>Sản Phẩm</th>
									<td>Tiền</td>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_SESSION['sanpham'])) {
									foreach ($_SESSION['sanpham'] as $value) { ?>
										<tr>
											<th><?= $value['bookname'] ?></th>
											<td><?= number_format($value['ThanhTien']) ?> VNĐ</td>
										</tr>
								<?php }
								} ?>
								<tr>
									<th>VAT</th>
									<td>0 VNĐ</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Tổng tiền</th>
									<td><?= number_format($count + 15000) ?> VNĐ</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="order-details padding60">
					<div class="log-title">
						<h3><strong>CHI TIẾT KHÁCH HÀNG</strong></h3>
					</div>
					<div class="por-dse clearfix">
						<ul>
							<li><span>Tên KH:<strong>:</strong></span> <?=$_SESSION['login']['fullname']?></li>
							<li><span>Email<strong>:</strong></span> <?=$_SESSION['login']['email']?></li>
							<li><span>Số ĐT<strong>:</strong></span> <?=$_SESSION['login']['phone']?></li>

							<li><span>Địa Chỉ<strong>:</strong></span><?=$_SESSION['login']['address']?></li>
							<li><span>Email<strong>:</strong></span> <?=$_SESSION['login']['email']?></li>
							
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- order-complete content section end -->