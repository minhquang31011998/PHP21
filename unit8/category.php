<?php 
/**
 *  
 */
class Post
{
	var $title;
	var $slug;
	var $parent_id;
	var $image;
	var $description;
	
	
	
	function inTT(){
		echo "<br>POST";
		echo "<br>Tiêu đề:".$this->title;
		echo "<br>Đường dẫn: ".$this->slug;
		echo "<br>Danh mục cha: ".$this->parent_id;
		echo "<br>Ảnh:  ".$this->image;
		echo "<br>Mô tả:  ".$this->description;


	}

}
$cate=new Post();
$cate->title = "thời sự";
$cate->slug = "abc-xyzzzz";
$cate->parent_id = "đây là danh mục cha";
$cate->image = "đây là ảnh";
$cate->description = "đây là phần mô tả";
$cate->inTT();

?>