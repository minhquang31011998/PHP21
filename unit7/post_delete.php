<?php 
	$id = $_GET['id'];

	require_once('connection.php');

	$query = "DELETE FROM posts WHERE id=".$id;
	

	$result = $conn->query($query);

	var_dump($result);


	header("Location: posts.php");
 ?>
