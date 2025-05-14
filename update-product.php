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
    <?php
        
        $id = $_GET['id'];
        $sql= "select * from product where id = '$id'";
        $result = mysqli_query($conn, $sql);
        $product = mysqli_fetch_assoc($result);
    ?>
    <form action="process-update-product.php?id=<?php echo $product['id'] ?>" class="" method="POST"enctype="multipart/form-data">
        <div class="box">
            <h1>Cập nhật thông tin sản phẩm</h1>
            <div class="row">
                <p>Sản phẩm <b>(*)</b></p>
                <input type="text" name="sanpham" value="<?php echo $product['san_pham'] ?>" >
            </div>
            <div class="row">
                <p>Giá <b>(*)</b></p>
                <input type="number" name="gia" value="<?php echo $product['gia'] ?>">
            </div>
            <div class="row">
                <p>Ảnh <b>(*)</b></p>
                <input type="file" name="fileToUpload" value="<?php echo $product['anh'] ?>">
            </div>
            
            <div class="row" style="display: flex; justify-content: center;">
                <input class="add" type="submit" value="Cập nhật">
            </div>
        </div>
    </form>
    <?php

        
    ?>
</body>
</html>