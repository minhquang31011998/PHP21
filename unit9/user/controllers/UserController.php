<?php 
require('models/User.php');
class UserController{
	var $model_obj;
	

	function __construct(){
		$this->model_obj=new User();
	}
	function list(){
		
		$users=$this->model_obj->getAll();
		require_once('views/user/list.php');
	}
	function add(){
		require_once('views/user/add.php');
	}
	function edit(){
		$uid=$_GET['id'];
		
		$user=$this->model_obj->find($uid);
		require('views/user/edit.php');
	}
	function detail(){
		
		
		$id=$_GET['id'];
		
		$user=$this->model_obj->find($id);
		
		require('views/user/detail.php');

	}
	function store(){
		
		$data=$_POST;
		
		
		
		$status=$this->model_obj->create($data);
		echo $status;
		if($status==TRUE){
			setcookie('msg','them moi thanh cong',time()+5);
		}else{
			setcookie('msg','them moi that bai',time()+5);
		}
		header("location: index.php?mod=user&act=list");


	}
	function update(){
		$data=$_POST;
		
		$data['update_at']=date('y-m-d h:i:s');
		
		$status=$this->model_obj->update($data);
		
		if($status==TRUE){
			setcookie('msg','update thanh cong',time()+5);
		}else{
			setcookie('msg','update that bai',time()+5);
		}
		header("location: index.php?mod=user&act=list");


	}
	function delete(){
		$data=$_GET;
		$data['delete_at']=date('y-m-d h:i:s');
		$status=$this->model_obj->delete($data);
		if($status == TRUE){
				setcookie('msg','Xóa thành công',time() + 5);
			}else{
				setcookie('msg','Xóa thất bại',time() + 5);
			}

		header("location: index.php?mod=user&act=list");

	}
	function error(){
		echo "<br> ACT 404";
	}
}

?>