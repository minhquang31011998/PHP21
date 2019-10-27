<?php 
require_once('connection.php');
$id=$_GET['id'];
$query= "SELECT*FROM posts WHERE id=".$id;
$result=$conn->query($query);
$posts=array();
$row = $result->fetch_assoc();
$posts[] = $row;


echo "<pre>";
print_r($posts);
echo "</pre>";

?>