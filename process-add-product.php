<?php
    if(!empty($_POST['sanpham']) && 
    !empty($_POST['gia'])){

       
            
            #kiểm tra ảnh có hợp lệ
            // Xử lý ảnh
            $target_dir = "anh/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
            // Kiểm tra xem file ảnh có hợp lệ không
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    echo "File không phải là ảnh.";
                    $uploadOk = 0;
                }
            }
    
            // Kiểm tra nếu file đã tồn tại
            if (file_exists($target_file)) {
                echo "File này đã tồn tại trên hệ thông";
                $uploadOk = 2;
            }
    
            // Kiểm tra kích thước file
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "File quá lớn";
                $uploadOk = 0;
            }
    
            // Cho phép các định dạng file ảnh nhất định
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
                $uploadOk = 0;
            }
            #kết thúc kiểm tra ảnh có hợp lệ

            #nếu ảnh không hợp lệ
            if($uploadOk == 0){
                echo "File không hợp lệ!";
            }
            #hợp lệ
            else{
                $image_path = $target_file;
                $sanpham = $_POST['sanpham'];
                $gia = $_POST['gia'];
                $sql = "";
                include('connect.php');
                if($uploadOk == 1){
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $sql = "INSERT INTO `product`( `san_pham`, `gia`, `anh`) VALUES ('$sanpham','$gia','$image_path')";
                        header('location: trangchu-admin.php?page_layout=trangchu');
                    }
                }
                else{
                    $sql = "INSERT INTO `product`( `san_pham`, `gia`, `anh`) VALUES ('$sanpham','$gia','$image_path')";
                }
                // echo $sql;
                if(!empty($sql)){
                    mysqli_query($conn, $sql);
                    header('location: trangchu-admin.php?page_layout=trangchu');
                }
            }
        
    }
    else{
        echo "Vui lòng nhập đầy đủ thông tin!";
    }
?>