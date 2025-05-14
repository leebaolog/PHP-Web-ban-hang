<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        nav{
            background-color:#ff5c33;
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }

        a{
            color: white;
            padding: 20px;
            text-decoration: none;
        }

        a:hover{
            background-color: black;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['username'])){
            header('location: login.php');
        }
    ?>
    <nav>
        <div>
            <a href="trangchu-admin.php?page_layout=trangchu">Trang chủ</a>
            <a href="trangchu-admin.php?page_layout=user">Người dùng</a>
            <a href="trangchu-admin.php?page_layout=add-product">Thêm sản phẩm</a>
        </div>
        <div>
            <a href="trangchu-admin.php?page_layout=logout">Đăng xuất</a>
        </div>    

    </nav>
   
    <?php
        include('connect.php');
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case "user":
                    include('user.php');
                    break;
                case "search-product-admin":
                    include('search-product-admin.php');
                    break;
                case "search-user":
                    include('search-user.php');
                    break;
                case "trangchu":
                    include('trangchu.php');
                    break;
                case "add-product":
                    include('add-product.php');
                    break;
                case "update-product":
                    include('update-product.php');
                    break;
                case "process-delete-product":
                    include('process-delete-product.php');
                    break;   
                case "logout":
                    session_destroy();
                    session_unset();
                    header('location: login.php');
                    break;
            }
        }
    ?>
</body>
</html>