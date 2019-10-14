<?php
session_start();
 
// Lấy danh sach sinh viên trong session
function getAllStudents()
{
    return isset($_SESSION['students']) ? $_SESSION['students'] : array();
}
 
// Lấy chi tiết một sinh viên dựa vào sinh viên id
function getStudent($id)
{
    // Lấy danh sách sinh viên để tìm
    $students = getAllStudents();
     
    // Duyệt qua từng phần tử, nếu xuất hiện ID giống nhau thì tức là đã tìm thấy sinh viên
    foreach ($students as $item)
    {
        if ($item['id'] == $id){
            return $item;
        }
    }
     
    return array();
}

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