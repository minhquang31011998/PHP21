<?php 
require_once('connection.php');
$id=$_GET['id'];
$query= "SELECT*FROM users WHERE id=".$id;
$result=$conn->query($query);
$categories=array();
$row = $result->fetch_assoc();
$categories[] = $row;


echo "<pre>";
print_r($categories);
echo "</pre>";

?>