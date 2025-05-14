<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .row{
            margin-top: 20px;
        }

        b{
            color: red;
        }

        form{
            margin: 20px auto;
            width: 400px;
            height: 450px;
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
        }
        .add{
            alig-item: center;
            padding: 10px 20px;
            color: white;
            background-color: green;
        }
    </style>
</head>
<body>
    <form action="process-add-user.php" class="" method="POST">
        <div class="box">
            <div class="row">
                <p>Họ và tên <b>(*)</b></p>
                <input type="text" name="hovaten" placeholder="Họ và tên">
            </div>
            <div class="row">
                <p>Tên đăng nhập <b>(*)</b></p>
                <input type="text" name="tendangnhap" placeholder="Tên đăng nhập">
            </div>
            <div class="row">
                <p>Mật khẩu <b>(*)</b></p>
                <input type="password" name="matkhau" placeholder="Mật khẩu">
            </div>
            <div class="row">
                <p>Nhập lại mật khẩu <b>(*)</b></p>
                <input type="password" name="nhaplaimatkhau" placeholder="Nhập lại mật khẩu">
            </div>   
            <div class="row" style="display: flex; justify-content: center;">
                <input class="add" type="submit" value="Create">
            </div>
        </div>
    </form>
    <?php

        
    ?>
</body>
</html>