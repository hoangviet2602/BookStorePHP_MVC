<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Đăng nhập</h2>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="main-input padding60" id="dangnhap">
					<div class="log-title">
						<h3><strong>Đăng Nhập</strong></h3>
					</div>
					<div class="login-text">
						<div class="custom-input">
							<p>Nếu bạn đã có tài khoản, vui lòng đăng nhập!</p>
							<?php if (isset($_COOKIE['msg1'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
								</div>
							<?php } ?>

							<div class="modal-body">
                    <form action="?act=taikhoan&xuli=dangnhap" method="post" id="form1">
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ email" name="username"
                                required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                            <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Quên mật
                                khẩu</a>
                        </div>

                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit" form="form1" name="submit" 
                            style="background: #F5A623">Đăng nhập</button>
                        <hr class="my-4">
                        
                    </form>
                	</div>
							
						</div>

					

					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="main-input padding60 new-customer" id="dangky">
					<div class="log-title">
						<h3><strong>đăng kí</strong></h3>
					</div>
					<?php if (isset($_COOKIE['msg'])) { ?>
						<div class="alert alert-success">
							<strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
						</div>
					<?php } ?>
					<div class="custom-input">
						<form action="?act=taikhoan&xuli=dangky" method="post" id="form2">
							<input type="text" name="fullname" placeholder="Họ và tên" required />
							<input type="text" name="username" placeholder="Tên tài khoản đăng nhập.." required  minlength="6"/>
							<input type="email" name="email" placeholder="Địa chỉ Email.." required />
							<input type="text" name="phone" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10" />
							<input type="password" name="password" placeholder="Mật khẩu" minlength="6" required />
							<input type="password" name="check_password" placeholder="Xác nhận mật khẩu" minlength="6" required />
							<div class="submit-text coupon">
								
								<button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit" form="form2"
                            style="background: #F5A623">Đăng ký</button>
							</div>
						</form>
					</div>

						


				</div>
			</div>
		</div>
	</div>
</section>
<!-- login content section end -->