
<a href="?mod=danhmuc&act=add" type="button" class="btn btn-primary">Thêm mới</a>

<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã danh mục</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['categoryid'] ?></td>
        <td><?= $row['categoryname'] ?></td>
        <td>
          <a href="?mod=danhmuc&act=detail&id=<?= $row['categoryid'] ?>" class="btn btn-success">Xem</a>
         
          <a href="?mod=danhmuc&act=edit&id=<?= $row['categoryid'] ?>" class="btn btn-warning">Sửa</a>
          <a href="?mod=danhmuc&act=delete&id=<?= $row['categoryid'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
         
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>