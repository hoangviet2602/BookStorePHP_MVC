<?php
require_once("MVC/Models/danhmuc.php");
class DanhmucController
{
	var $danhmuc_model;
	function __construct()
	{
		$this->danhmuc_model = new Danhmuc();
	}

	public function list()
	{
		$data = array();
		$data = $this->danhmuc_model->All(); 
		require_once("MVC/Views/Admin/index.php");
	}

	public function add()
	{
		require_once("MVC/Views/Admin/index.php");
	}
	public function store()
	{
		$data = array(			
			'categoryname' => $_POST['categoryname']
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                
                $data[$key] = $value;
            }
        }
		$this->danhmuc_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->danhmuc_model->find($id);
		require_once("MVC/Views/Admin/index.php");
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->danhmuc_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->danhmuc_model->find($id);
		require_once("MVC/Views/Admin/index.php");
	}
	public function update()
	{
		$data = array(
			'categoryid' => $_POST['categoryid'],
			'categoryname' => $_POST['categoryname'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->danhmuc_model->update($data);
	}
}
