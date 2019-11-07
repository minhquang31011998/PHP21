<?php 
class CategoryController{
	function __construct(){
		echo "<br> Quản lí danh mục bài viết in controller";

	}
	function list(){
		require('models/Category.php');
		$model_obj=new Category();
		
		$categories=$model_obj->getAll();
		require_once('views/category/list.php');
	}
	function add(){
		require_once('views/category/add.php');
	}
	function edit(){
		echo "<br> sửa danh mục";
	}
	function error(){
		echo "<br> ACT 404";
	}
}

?>