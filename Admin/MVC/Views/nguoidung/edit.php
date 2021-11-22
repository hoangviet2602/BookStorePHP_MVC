<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=nguoidung&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="userid" value="<?= $data['userid']?>">
        <div class="form-group">
               <label for="">Họ tên</label>
               <input type="text" class="form-control" id="" placeholder="" name="fullname" value="<?= $data['fullname']?>">
           </div>
           <div class="form-group">
               <label for="">Tên Tài Khoản</label>
               <input type="text" class="form-control" id="" placeholder="" name="username" value="<?= $data['username']?>">
           </div>
           <div class="form-group">
               <label for="">Giới tính</label>
               <select id="" name="GioiTinh" class="form-control">
                    <option <?= ($data['male'] == '1')?'selected':''?> value="Nam"> Nam</option>
                    <option <?= ($data['male'] == '0')?'selected':''?> value="Nữ"> Nữ</option>
                    <option <?= ($data['male'] == 'Khác')?'selected':''?> value="Khác"> Khác</option>
               </select>
           </div>
           <div class="form-group">
               <label for="">Số Điện Thoại</label>
               <input type="text" class="form-control" id="" placeholder="" name="phone" value="<?= $data['phone']?>">
           </div>
           <div class="form-group">
               <label for="">Địa chỉ</label>
               <input type="text" class="form-control" id="" placeholder="" name="address" value="<?= $data['address']?>">
           </div>
           <div class="form-group">
               <label for="">Mật Khẩu</label>
               <input type="Password" class="form-control" id="" placeholder="" name="password" value="<?= $data['password']?>">
           </div>
           <div class="form-group">
               <label for="">Trạng Thái</label>
               <input type="text" class="form-control" id="" placeholder="" name="isdisable" value="<?= $data['isdisable']?>">
           </div>
           <div class="form-group">
               <label for="">Email</label>
               <input type="Email" class="form-control" id="" placeholder="" name="email" value="<?= $data['email']?>">
           </div>
           <div class="form-group">
           <div class="form-group">
               <label for="">Mã quyền</label>
               <select id="" name="isadmin" class="form-control">
                    <option <?= ($data['isadmin'] == '0')?'selected':''?> value="1"> Khách hàng</option>
                    <option <?= ($data['isadmin'] == '1')?'selected':''?> value="2"> Quản trị viên</option>
               </select>
           </div>
           </div>
           <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </tbody>
</table>