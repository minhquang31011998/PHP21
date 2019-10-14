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


$data = getStudent($_GET['id']);

	echo '<h1 align="center">Thông tin sinh viên</h1>';
	
	echo 'Mã sinh viên: '.$data['id'].'<br>';
	echo 'Họ và tên: '.$data['name'].'<br>';
	echo 'Số điện thoại: '.$data['sdt'].'<br>';
	echo 'Email: '.$data['email'].'<br>';
	echo 'Giới tính: '.$data['gender'].'<br>';
	echo 'Địa chỉ: '.$data['dc'].'<br>';


 ?>