<?php 
if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        
        $target_dir = "uploads/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["file"]["name"]); // link sẽ upload file lên
        die($_FILES["file"]["tmp_name"]);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload Image" name="submit">
</form>
 
 </body>
 </html>