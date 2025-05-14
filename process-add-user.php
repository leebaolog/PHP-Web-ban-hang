<?php
    if(!empty($_POST['hovaten']) && 
    !empty($_POST['tendangnhap']) &&
    !empty($_POST['matkhau']) &&
    !empty($_POST['nhaplaimatkhau'])){

        $hoTen = $_POST['hovaten'];
        $tenDangNhap = $_POST['tendangnhap'];
        $matKhau = $_POST['matkhau'];
        $nhapLaiMatKhau = $_POST['nhaplaimatkhau'];
        if($matKhau !== $nhapLaiMatKhau){
            echo "Vui lòng nhập lại mật khẩu";
        }
        else{
            include('connect.php');
            $sql = "INSERT INTO `user`(`ho_va_ten`, `ten_dang_nhap`, `mat_khau`, `quyen_id`) VALUES ('$hoTen','$tenDangNhap','$matKhau',1)";
            mysqli_query($conn, $sql);
            header('location: login.php');
        }
    }
    else{
        echo "Vui lòng nhập đầy đủ thông tin!";
    }
?>