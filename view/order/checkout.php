<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thanh Toán</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- Checkout content section start -->
<section class="pages checkout section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="main-input single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Chi tiết hóa đơn</strong></h3>
					</div>
					<div class="custom-input">
						<form action="?act=checkout&xuli=save" method="post">
							<input type="text" name="receivername" placeholder="Người nhận" required value="<?php echo $_SESSION['login']['username']." "  ?>"/>
							<input type="email" name="email" placeholder="Địa chỉ Email.." required  value="<?=$_SESSION['login']['email']?>"/>
							<input type="text" name="phone" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10"  value="<?=$_SESSION['login']['phone']?>"/>
							<input type="text" name="address" placeholder="Đại chỉ giao hàng" required  value="<?=$_SESSION['login']['address']?>"/>
							</br>
							<div class="submit-text">
							<button type="submit" class="btn" style="background-color: #CF111A; color: white;margin-left:10px">
                                							<i>Thanh toán</i>
                    									</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Hóa đơn</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<table>
							<thead>
								<tr>
									<th>Sản phẩm</th>
									<td>Thành Tiền</td>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_SESSION['sanpham'])) {
									foreach ($_SESSION['sanpham'] as $value) { ?>
								<tr>
									<th><?=$value['bookid']?></th>
									<td><?=number_format($value['ThanhTien'])?> VNĐ</td>
								</tr>
						<?php }
								} ?>
						
						<tr>
							<th>Vận Chuyển</th>
							<td>15,000 VNĐ</td>
						</tr>
						<tr>
							<th>Thuế VAT</th>
							<td>0</td>
						</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Tổng</th>
									<td><?= number_format($count + 15000) ?> VNĐ</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Checkout content section end -->