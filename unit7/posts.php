<?php 
require_once('connection.php');
// Câu lệnh truy vấn
$query = "SELECT * FROM posts";

// Thực thi câu lệnh
$result = $conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
$posts = array();

while($row = $result->fetch_assoc()) { 
	$posts[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="post_add.php" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </thead>
            <tbody>
              <?php foreach( $posts as $key => $row )  { ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    
                    <td><?php echo $row['description'] ?></td>
                    <td><img style="width: 40%;height: 50%;" src="<?php echo $row['image'] ?>" ></td>
                    <td>
                        <a href="post_detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="post_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="post_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>



    </table>
</div>
</body>
</html>