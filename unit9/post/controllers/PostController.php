<?php 
class PostController{
	function __construct(){
		echo "<br> Quản lí bài viết in controller";

	}
	function list(){
		require('models/Post.php');
		$model_obj=new Post();
		
		$posts=$model_obj->getAll();
		require_once('views/post/list.php');
	}
	function add(){
		require_once('views/post/add.php');
	}
	function edit(){
		echo "<br> sửa danh mục";
	}
	function error(){
		echo "<br> ACT 404";
	}
}

?>