<?php

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require('csdl.php');

  // echo "<pre>";
  //   print_r($products);
  // echo "</pre>";
  // var_dump($products)
   if (isset($_GET['id'])) {
     $id =$_GET['id'];

    
     if (isset($_SESSION['cart'][$id])) {
       $_SESSION['cart'][$id]['soluong']++;
     }else{
         $products[$id]['soluong']=1; // số lương mua khi chưa có sp trong giỏ hàng =1
          $_SESSION['cart'][$id]=$products[$id];
          $_SESSION['cart'][$id]['time']=date('d/m/y h:s:i');
     }
      echo "<pre>";
        print_r($_SESSION);
     echo "</pre>";


   }
   header('Location: cart_detail.php')
?>