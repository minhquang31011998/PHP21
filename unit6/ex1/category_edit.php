<?php 
$id = $_GET['id'];

require_once('connection.php');

$query = "SELECT * FROM categories WHERE id=".$id;

$result = $conn->query($query);

$cate = $result->fetch_assoc();
// Câu lệnh truy vấn
$query = "SELECT * FROM categories WHERE parent_id is NULL";

// Thực thi câu lệnh
$result1 = $conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
$categories = array();

while($row = $result1->fetch_assoc()) { 
    $categories[] = $row;
}
	//print_r($cate);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
       
        <h3 align="center">Edit Category</h3>
        <hr>
        <form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?= $cate['id'] ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $cate['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description"  value="<?= $cate['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Danh mục cha</label>
                <select class="form-group" name="parent_id">
                  <option value="0">Mời bạn chọn danh mục cha</option>
                  <?php foreach ($categories as $value) { ?>
                      <option <?php if($cate['parent_id']==$value['id']) echo "selected" ?> value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                  <?php } ?>
                  
                 
              </select>
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
