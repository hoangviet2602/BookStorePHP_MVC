<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thông tin tài khoản</h2>
					<ul class="text-left">
						<li><a href="index.php?act=home">Trang chủ</a></li>
						<li><span> // </span>Tài khoản</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- My account content section start -->
<section class="pages my-account-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Tài khoản của tôi</strong></h3>
					</div>
					<div class="prament-area main-input" id="doitk">
						<ul class="panel-group" id="accordion">
							<li class="panel">
								<div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
									<label>
										<input type="radio" checked value="forever" name="rememberme" />
										Thông tin cá nhân
									</label>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="single-log-info">
										<div class="bulling-title">
											<b>
												<?php if (isset($_COOKIE['doimk'])) {
													echo $_COOKIE['doimk'];
												} ?>
											</b>
											<div class="custom-input">
												<form action="?act=taikhoan&xuli=update" method="post">
													<div class="row">
														<div class="col-md-6">
															<input type="text" name="fullname" placeholder="Họ và tên.." required value="<?= $data['fullname'] ?>" />
														</div>
														
													</div>
													
													<input type="email" name="email" placeholder="Địa chỉ Email.." required value="<?= $data['email'] ?>" />
													<input type="text" name="phone" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10" value="<?= $data['phone'] ?>" />
													<input type="text" name="address" placeholder="Địa chỉ.." required value="<?= $data['address'] ?>" />
													<div class="submit-text">
														<button type="submit_tt">Lưu</button>
													</div>
												</form>
											</div>
										</div>
									</div>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- my account content section end -->