<?php 
session_start();
require('csdl.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-idmSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h2>cart</h2>
		<div class="container">
			<a class="btn btn-success" href="cart.php" title="">Quay lại trang sản phẩm</a>

      <table class="table">
        <thead>
          <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Hình ảnh</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         <?php $sum=0; ?>
         <?php foreach( $_SESSION['cart'] as $key => $row )  { 

          $sum += $row['soluong']*$row['price'];
          ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo number_format($row['price'] )?>VND</td>
            <td>
              <a href="addtocart.php?id=<?php echo $row['id'] ?>" title=""><button type="button" class="btn btn-primary">+</button></a>
              <?php echo $row['soluong'] ?>
               <a href="delete.php?id=<?php echo $row['id'] ?>" title=""><button type="button" class="btn btn-primary">-</button></a>

            </td>

            <td><img style="width: 40%;height: 50 %;" src="<?php echo $row['image'] ?>" ></td>
            <td><?php echo $row['time'] ?></td>

            <td>
             <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>" title="">Xóa khỏi giỏ hàng</a>
           </td>
         </tr>



       <?php } ?>

       <tr>
         <td colspan="2" style="color:red"> Tong tien</td>
         <td colspan="5" ><?php echo number_format($sum); ?></td>
       </tr>
     </tbody>
   </table>
 </div>
</div>
</body>
</html>