<?php 
/**
 *  
 */
class Post
{
	var $name;
	var $email;
	var $image;
	var $pass;
	
	
	function inTT(){
		echo "<br>POST";
		echo "<br>tên:".$this->name;
		echo "<br>email: ".$this->email;
		echo "<br>ảnh:  ".$this->image;
		echo "<br>mật khẩu:  ".$this->pass;

	}

}
$post1=new Post();
$post1->name = "tran van a";
$post1->email = "abc@gmail.com";
$post1->image = "đây là ảnh";
$post1->pass = "đây là pass";
$post1->inTT();

?>