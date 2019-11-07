
<?php 
require_once('models/Connection.php');
class Post{
	var $connection_obj;
	function __construct(){
		$this->connection_obj= new Connection();
	}
	function getAll(){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM posts";

		// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$posts = array();

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}
		return $posts;
	}
	function find($id){

		$query = "SELECT * FROM posts WHERE id=".$id;

		$result = $this->connection_obj->conn->query($query);

		$post = $result->fetch_assoc();

		return $post;
	}


}
?>