<?php 
session_start();
if (isset($_GET['id'])) 
	$id = $_GET['id'];

	if ($_SESSION['cart'][$id]['soluong']>1) {
		$_SESSION['cart'][$id]['soluong']--;
	}
	else{
		unset($_SESSION['cart'][$id]);


	}
	header('Location: cart_detail.php');


	?>