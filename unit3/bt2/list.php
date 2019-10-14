<?php 
session_start();
function getAllStudents()

{
    return isset($_SESSION['students']) ? $_SESSION['students'] : array();
}  $students = getAllStudents();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <a href="add.php">Thêm mới</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>#</th>
            <th>Mã sinh viên</th>
            <th>Họ tên</th>
            <th>Action</th>
        </tr>
        <?php
        $i=0;
        foreach ($students as $item){ $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>


                <td>
                   <a href="detail.php?id=<?php echo $item['id']; ?>" class="btn btn-success">Detail</a>
                   <a href="delete.php?id=<?php echo $item['id']; ?>" class="btn btn-danger">Delete</a>
                           </form>
               </td>
           </tr>
       <?php } ?>
   </table>
</body>
</html>