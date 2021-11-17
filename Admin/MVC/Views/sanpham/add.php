<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form action="?mod=sanpham&act=store" method="POST" role="form" enctype="multipart/form-data">

    <div class="form-group">
      <label for="cars">Danh mục: </label> 
      <select id="" name="categoryid" class="form-control">
        <?php foreach ($data_dm as $row) { ?>
          <option value="<?= $row['categoryid'] ?>"><?= $row['categoryname'] ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label for="cars">Tác giả: </label>
      <select id="" name="authorid" class="form-control">
        <?php foreach ($data_tg as $row) { ?>
          <option value="<?= $row['authorid'] ?>"><?= $row['authorname'] ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label for="">Tên sách</label>
      <input type="text" class="form-control" id="" placeholder="" name="bookname">
    </div>

    <div class="form-group">
      <label for="">Đơn giá</label>
      <input type="text" class="form-control" id="" placeholder="" name="price">
    </div>

    <div class="form-group">
      <label for="">Số lượng</label>
      <input type="text" class="form-control" id="" placeholder="" name="quantity">
    </div>

    <div class="form-group">
      <label for="">Hình ảnh  </label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1">
    </div>

    <div class="form-group">
      <label for="">Câng nặng:</label>
      <input type="text" class="form-control" id="" placeholder="" name="bookweight">
    </div>

    <div class="form-group">
      <label for="">Lượt xem: </label>
      <input type="text" class="form-control" id="" placeholder="" name="viewcount">
    </div>

    <div class="form-group">
      <label for="">Đã bán</label>
      <input type="text" class="form-control" id="" placeholder="" name="purchasedcount">
    </div>
    
    <div class="form-group">
      <label for="">Time release </label>
      <input type="text" class="form-control" id="" placeholder="" name="releasedate">
    </div>

    <div class="form-group">
      <label for="">Số trang: </label>
      <input type="text" class="form-control" id="" placeholder="" name="bookpages">
    </div>
    <div class="form-group">
      <label for="">Publisher </label>
      <input type="text" class="form-control" id="" placeholder="" name="publisher">
    </div>
    <div class="form-group">
      <label for="">Bookbinding </label>
      <input type="text" class="form-control" id="" placeholder="" name="bookbinding">
    </div>


    <label for="">Mô tả</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote" placeholder="" name="bookdescription"></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
</table>