<?php
require_once("MVC/Models/sanpham.php");
class SanphamController
{
    var $sanpham_model;
    public function __construct()
    {
      $this->sanpham_model = new sanpham();
    }
    public function list()
    {
        $data = $this->sanpham_model->All();
        require_once("MVC/Views/Admin/index.php");
        
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        
    }
    public function add()
    {
        $data_tg = $this->sanpham_model->tacgia();
        $data_dm = $this->sanpham_model->danhmuc();
        require_once("MVC/Views/Admin/index.php");
        
    }
    public function store()
    {   
        $target_dir = "../public/img/products/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 = "img/products/" .basename($_FILES["HinhAnh1"]["name"]);
        }

     
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(  
            'bookname'  =>   $_POST['bookname'],
            'bookimageurl' => $HinhAnh1,
            'bookdescription' =>  $_POST['bookdescription'],
            'bookpages' => $_POST['bookpages'],
            'bookweight' => $_POST['bookweight'],
            'releasedate' =>$_POST['releasedate'],
            'viewcount' =>  $_POST['viewcount'],
            'purchasedcount' =>  $_POST['purchasedcount'],
            'authorid' =>  $_POST['authorid'],
            'categoryid' => $_POST['categoryid'],
            'quantity' => $_POST['quantity'],
            'price' => $_POST['price'],
            'timestamp' => $ThoiGian,
            'publisher' =>$_POST['publisher'],
            'bookbinding' =>$_POST['bookbinding']
            
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->sanpham_model->store($data);
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->sanpham_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data_tg = $this->sanpham_model->tacgia();
        $data_dm = $this->sanpham_model->danhmuc();

        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/edit.php");
    }
    public function update()
    {

        $target_dir = "../public/img/products/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["HinhAnh1"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 = "img/products/" .basename($_FILES["HinhAnh1"]["name"]);
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'bookid' => $_POST['bookid'],
            'bookname'  =>   $_POST['bookname'],
            'bookimageurl' => $HinhAnh1,
            'bookdescription' =>  $_POST['bookdescription'],
            'bookpages' => $_POST['bookpages'],
            'bookweight' => $_POST['bookweight'],
            'releasedate' =>$_POST['releasedate'],
            'viewcount' =>  $_POST['viewcount'],
            'purchasedcount' =>  $_POST['purchasedcount'],
            'authorid' =>  $_POST['authorid'],
            'categoryid' => $_POST['categoryid'],
            'quantity' => $_POST['quantity'],
            'price' => $_POST['price'],
            'timestamp' => $ThoiGian,
            'publisher' =>$_POST['publisher'],
            'bookbinding' =>$_POST['bookbinding']
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($HinhAnh1 == "") {
            unset($data['bookimageurl']);
        }
       
        $this->sanpham_model->update($data);
    }
}
