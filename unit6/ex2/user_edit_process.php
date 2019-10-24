<?php 
	require_once('connection.php');
	
	$data = $_POST;

    $query ="UPDATE users SET name='".$data['name']."',email='".$data['email']."' WHERE id =".$data['id'];

    // Thực thi câu lệnh
	$result = $conn->query($query);

	if($result == true){
		header("Location: users.php");
	}else{
		header("Location: user_add.php");
	}

 ?>
