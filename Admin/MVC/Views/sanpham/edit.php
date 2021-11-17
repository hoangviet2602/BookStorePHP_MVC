<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=sanpham&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="bookid" value="<?= $data['bookid'] ?>">

       
        <div class="form-group">
      <label for="cars">Danh mục: </label> 
      <select id="" name="categoryid" class="form-control">
        <?php foreach ($data_dm as $row) { ?>
            <option <?= ($row['categoryid'] == $data['categoryid'])?'selected':''?> value="<?= $row['categoryid'] ?>"> <?= $row['categoryname'] ?></option>
        <?php } ?>
      </select>
    </div>

        <div class="form-group">
            <label for="cars">Tác giả: </label>
            <select id="" name="authorid" class="form-control">
                <?php foreach ($data_tg as $row) { ?>
                    <option <?= ($row['authorid'] == $data['authorid'])?'selected':''?> value="<?= $row['authorid'] ?>"><?= $row['authorname'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Tên sách: </label>
            <input type="text" class="form-control" id="" placeholder="" name="bookname" value="<?=$data['bookname']?>">
        </div>
        <div class="form-group">
            <label for="">Đơn giá</label>
            <input type="text" class="form-control" id="" placeholder="" name="price" value="<?=$data['price']?>">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" id="" placeholder="" name="quantity" value="<?=$data['quantity']?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 1  </label>
            <img src="../public/<?=$data['bookimageurl']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1" value="<?=$data['HinhAnh1']?>">
        </div>
   
        <div class="form-group">
            <label for="">Cân nặng</label>
            <input type="text" class="form-control" id="" placeholder="" name="bookweight" value="<?=$data['bookweight']?>">
        </div>

        <div class="form-group">
            <label for="">Lượt xem</label>
            <input type="text" class="form-control" id="" placeholder="" name="viewcount" value="<?=$data['viewcount']?>">
        </div>
        <div class="form-group">
            <label for="">Đã bán</label>
            <input type="text" class="form-control" id="" placeholder="" name="purchasedcount" value="<?=$data['purchasedcount']?>">
        </div>
        <div class="form-group">
            <label for="">Time release</label>
            <input type="text" class="form-control" id="" placeholder="" name="releasedate" value="<?=$data['releasedate']?>">
        </div>
        <div class="form-group">
            <label for="">Số trang</label>
            <input type="text" class="form-control" id="" placeholder="" name="bookpages" value="<?=$data['bookpages']?>">
        </div>
        <div class="form-group">
            <label for="">Publisher</label>
            <input type="text" class="form-control" id="" placeholder="" name="publisher" value="<?=$data['publisher']?>">
        </div>
       
        <div class="form-group">
            <label for="">Bookbinding</label>
            <input type="text" class="form-control" id="" placeholder="" name="bookbinding" value="<?=$data['bookbinding']?>">
        </div>
        
        <label for="">Mô tả</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote" placeholder="" name="bookdescription"><?=$data['bookdescription']?></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>