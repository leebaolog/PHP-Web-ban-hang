<?php
    if(!empty($_POST['sanpham']) && 
    !empty($_POST['gia'])&&
    !empty($_POST['soluong'])  ){

       
            include('connect.php');
            
               
                $keyword=$_GET['id_u'];
                $id = $_GET['id'];
                $sql1 = "select * from product where  id='$id'";
                $result1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_array($result1);
                $image_path = $row1['anh'];
                $sql2 = "select * from user where ten_dang_nhap like'%".$keyword."%'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_array($result2);
                $id_user = $row2['id'];
                $sanpham = $_POST['sanpham'];
                $gia = $_POST['gia'];
                $soluong= $_POST['soluong'];
                $sql = "";
                include('connect.php');
               
                        $sql = "INSERT INTO `cart`( `id_user`, `san_pham`, `so_luong`, `anh`) VALUES ('$id_user','$sanpham','$gia','$image_path')";
                        header('location: trangchu-admin.php?page_layout=user-trangchu');
                    
                
               
                
                if(!empty($sql)){
                    mysqli_query($conn, $sql);
                    header('location: trangchu-user.php?page_layout=user-trangchu');
                }
            }
        
    
    else{
        echo "Vui lòng nhập đầy đủ thông tin!";
    }
?>