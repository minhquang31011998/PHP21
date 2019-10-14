<?php 
session_start();
$data = array();
$errors = array();
function getAllStudents()
{
	return isset($_SESSION['students']) ? $_SESSION['students'] : array();
}  
function updateStudent($id, $name, $sdt, $email,$gender,$dc)
{
    // Lấy danh sách sinh viên
	$students = getAllStudents();

    // Khai báo cấu trúc lưu trữ một sinh viên
	$new_student = array(
		'id' => $id,
		'name' => $name,
		'sdt' => $sdt,
		'email' => $email,
		'gender' => $gender,
		'dc' => $dc,
	);
	$students[] = $new_student;

    // Cập nhật dữ liệu trong Session
	$_SESSION['students'] = $students;

	return $students;

	
}
$id=$_GET['id'];
$name=$_GET['name'];
$sdt=$_GET['sdt'];
$email=$_GET['email'];
$gt=$_GET['gender'];
$dc=$_GET['dc'];
updateStudent($id, $name, $sdt,$email,$gender,$dc);
header("Location:list.php");


?>