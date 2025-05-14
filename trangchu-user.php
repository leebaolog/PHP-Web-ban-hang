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
            <a href="trangchu-user.php?page_layout=user-trangchu">Trang chủ</a>
            <a href="trangchu-user.php?page_layout=cart&id=<?php echo $_SESSION['username']; ?>">Giỏ hàng</a>
           
        </div>
        <div>
            <a href="trangchu-user.php?page_layout=logout">Đăng xuất</a>
        </div>    
    </nav>
    <div>
            <form action="trangchu-user.php?page_layout=search-product-user"method="POST">
                <input type="text" placeholder="Tìm kiếm sản phẩm..." name="keyword">
                <input type="submit" name="search" value="Tìm kiếm">
            </form>
        </div>
    <?php
        include('connect.php');
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case "search-product-user":
                    include('search-product-user.php');
                    break;
                case "user-trangchu":
                    include('user-trangchu.php');
                    break;
                case "cart":
                    include('cart.php');
                    break;
                case "buy-product":
                    include('buy-product.php');
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