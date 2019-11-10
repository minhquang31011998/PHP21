<?php 
$mod = isset($_GET['mod'])?$_GET['mod']:'';
$act = isset($_GET['act'])?$_GET['act']:'';

switch ($mod) {
	case 'user':
	require_once('controllers/UserController.php');
	$controller_obj = new UserController();

	switch($act){
		case 'list':
		$controller_obj->list();
		break;
		case 'add':
		$controller_obj->add();
		break;
		case 'edit':
		$controller_obj->edit();
		break;
		case 'store':
		$controller_obj->store();
		break;
		case 'detail':
		$controller_obj->detail();
		break;
		case 'delete':
		$controller_obj->delete();
		break;
		case 'update':
		$controller_obj->update();
		break;
		
		default:
		$controller_obj->error();
		break;
	}
	break;
	case 'post':
	echo"<br> Quản lí bài viết";
	switch($act){
		case 'list':
		echo"<br> Xem danh bài viết";
		break;
		case 'add':
		echo"<br> Thêm mới bài viết";
		break;
		case 'edit':
		echo"<br> Sửa bài viết";
		break;
		
		default:
		echo"<br> ACT 404";
		break;
	}
	break;
}
?>