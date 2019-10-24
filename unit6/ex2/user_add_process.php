<?php 
// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

// // Viết câu lệnh để thêm dữ liệu
//     $query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";

// // Thực thi câu lệnh
//     $status = $conn->query($query);
 // Thong so ket noi CSDL
	
require_once('connection.php');
	

// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO users (name, email, password) VALUES ('".$data['name']."','".$data['email']."','".$data['password']."')";
 

// Thực thi câu lệnh
    $result = $conn->query($query);
    if($result==true){
    	header('location: users.php');
    }else{
    	header("location: user_add.php");
    }

 ?>