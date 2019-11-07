<?php 
class UserController{
	function __construct(){
		echo "<br> Quản lí danh mục bài viết in controller";

	}
	function list(){
		require('models/User.php');
		$model_obj=new User();
		
		$users=$model_obj->getAll();
		require_once('views/user/list.php');
	}
	function add(){
		require_once('views/user/add.php');
	}
	function edit(){
		echo "<br> sửa danh mục";
	}
	function detail(){
		
		require('models/User.php');
		$id=$_GET['id'];
			$model_obj=new User();
		
		$user=$model_obj->find($id);
		
		require('view/user/detail.php');

	}
	function error(){
		echo "<br> ACT 404";
	}
}

?>