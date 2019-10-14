<?php

$id=$_POST['id'];
$name=$_POST['name'];
$sdt=$_POST['sdt'];
$email=$_POST['email'];
$gt=$_POST['gender'];
$dc=$_POST['dc'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(!$id || !$name || !$sdt || !$email || !$dc){
	header('location: add1.php');
	}
else{ 
	echo '<h1 align="center">Thông tin sinh viên</h1>';
	
	echo 'Mã sinh viên: '.$id.'<br>';
	echo 'Họ và tên: '.$name.'<br>';
	echo 'Số điện thoại: '.$sdt.'<br>';
	echo 'Email: '.$email.'<br>';
	echo 'Giới tính: '.$gt.'<br>';
	echo 'Địa chỉ: '.$dc.'<br>';
	}
}
 ?>