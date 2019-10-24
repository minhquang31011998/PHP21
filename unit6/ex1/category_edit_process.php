<?php 
	require_once('connection.php');
	
	$data = $_POST;

    $query ="UPDATE categories SET name='".$data['name']."',description='".$data['description']."' WHERE id =".$data['id'];

    // Thực thi câu lệnh
	$result = $conn->query($query);

	if($result == true){
		header("Location: categories.php");
	}else{
		header("Location: category_add.php");
	}

 ?>
