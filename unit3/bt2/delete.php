<?php
session_start();
function getAllStudents()
{
    return isset($_SESSION['students']) ? $_SESSION['students'] : array();
}  
function deleteStudent($id)
{
    // Lấy danh sách sinh viên để tìm
    $students = getAllStudents();

    /// Duyệt qua từng phần tử, nếu xuất hiện ID giống nhau thì tức là đã tìm thấy sinh viên
    foreach ($students as $key => $item)
    {
        // Đã tìm thấy thì dùng hàm unset để xóa
        if ($item['id'] == $id){
            unset($students[$key]);
        }
    }

    // Cập nhật lại Session
    $_SESSION['students'] = $students;

    return $students;
   


} 
// if (!empty($_GET['delete']))
// {
//     $id = isset($_GET['id']) ? $_GET['id'] : '';
//     deleteStudent($id);
$id =  $_GET['id'];
    deleteStudent($id);
header("Location:list.php");
 
?>