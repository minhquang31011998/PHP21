
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>users</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="index.php?mod=user&act=edit&id=" class="btn btn-primary">Add New User</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                
                <th>Description</th>
                <th>Action</th>
            </thead>
            <tbody>
              <?php foreach( $users as $key => $row )  { ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    
                    <td><?php echo $row['email'] ?></td>
                    <td><img style="width: 40%;height: 50%;" src="<?php echo $row['image'] ?>" ></td>
                    <td>
                        <a href="index.php?mod=user&act=detail&id=<?php echo $row['id'] ?>" class="btn btn-primary">Detail</a>
                        <a href="index.php?mod=user&act=edit&id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
                        <a href="index.php?mod=user&act=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>



    </table>
</div>
</body>
</html>