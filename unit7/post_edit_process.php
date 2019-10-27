<?php 
	require_once('connection.php');
	
	$data = $_POST;
	
	// if($data['parent_id'] == 0){


    $query ="UPDATE posts SET title='".$data['title']."',description='".$data['description']."' WHERE id =".$data['id'];
// }

// else{
// 	 $query ="UPDATE categories SET name='".$data['name']."',description='".$data['description']."',parent_id='".$data['parent_id']."' WHERE id =".$data['id'];
// 	}
	
    // Thực thi câu lệnh
	$result = $conn->query($query);

	if($result == true){
		header("Location: posts.php");
	}else{
		header("Location: post_add.php");
	}

 ?>
