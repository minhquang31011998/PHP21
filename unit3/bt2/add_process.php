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

updateStudent($id, $name, $sdt,$email,$gender,$dc);
        header("Location:student-list.php");}
    $id=$_POST['id'];
$name=$_POST['name'];
$sdt=$_POST['sdt'];
$email=$_POST['email'];
$gt=$_POST['gender'];
$dc=$_POST['dc'];
 ?>