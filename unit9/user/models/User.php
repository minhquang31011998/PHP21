
<?php 
require_once('models/Connection.php');
class User{
	var $connection_obj;
	function __construct(){
		$this->connection_obj= new Connection();
	}
	function getAll(){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM users";

		// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$user = array();

		while($row = $result->fetch_assoc()) { 
			$user[] = $row;
		}
		return $user;
	}
	function find($id){

		$query = "SELECT * FROM users WHERE id=".$id;

		$result = $this->connection_obj->conn->query($query);

		$user = $result->fetch_assoc();

		return $user;
	}


}
?>