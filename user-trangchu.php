<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <style>
        img{
            width: 100px;
        }

        .update{
            background-color: blue;
            padding: 10px 20px;
        }

        .delete{
            background-color: red;
            padding: 10px 20px;
        }
        .buy{
            background-color: blue;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <h1>Thông tin hàng hóa</h1>
    <table border=1>
        <tr>
            <th>Mã</th>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Mua</th>
     
         
        </tr>
        <?php
            $sql = "SELECT * FROM `product` WHERE 1";
            $result = mysqli_query($conn, $sql);
            
            while($row = mysqli_fetch_array($result)){   
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['san_pham']; ?></td>
            <td><?php echo $row['gia']; ?></td>
            <td><img src="<?php echo $row['anh']; ?>" ></td>
            <td>
                <a class="buy" href="trangchu-user.php?page_layout=buy-product&id=<?php echo $row['id']; ?>">Mua</a>
            </td>
            
        </tr>
        <?php } ?>
    </table>
</body>
</html>