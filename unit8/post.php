<?php 
/**
 *  
 */
class Post
{
	var $title;
	var $slug;
	var $description;
	var $content;
	
	
	function inTT(){
		echo "<br>POST";
		echo "<br>Tiêu đề:".$this->title;
		echo "<br>Đường dẫn: ".$this->slug;
		echo "<br>Mô tả:  ".$this->description;
		echo "<br>Nội dung:  ".$this->content;

	}

}
$post1=new Post();
$post1->title = "bài báo";
$post1->slug = "abc-xyz";
$post1->description = "đây là phần mô tả";
$post1->content = "đây là nội dung";
$post1->inTT();

?>