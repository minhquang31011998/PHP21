<?php 
// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // die;

// // Viết câu lệnh để thêm dữ liệu
//     $query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";

// // Thực thi câu lệnh
//     $status = $conn->query($query);
 // Thong so ket noi CSDL
	
require_once('connection.php');
	
if($data['parent_id'] == 0){
// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO categories (name, description, parent_id) VALUES ('".$data['name']."','".$data['description']."','".$data['parent_id']."')";
}else{
      $query = "INSERT INTO categories (name, description, parent_id) VALUES ('".$data['name']."','".$data['description']."')";
}
// Thực thi câu lệnh
    $result = $conn->query($query);
    if($result==true){
    	header('location: categories.php');
    }else{
    	header("location: category_add.php");
    }

 ?>