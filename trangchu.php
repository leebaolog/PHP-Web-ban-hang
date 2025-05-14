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
    </style>
</head>
<body>
        <div>
            <form action="trangchu-admin.php?page_layout=search-product-admin"method="POST">
                <input type="text" placeholder="Tìm kiếm sản phẩm..." name="keyword">
                <input type="submit" name="search" value="Tìm kiếm">
            </form>
        </div>
    <h1>Thông tin hàng hóa</h1>
    <table border=1>
        <tr>
            <th>Mã</th>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Chức năng</th>
     
         
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
                <a class="update" href="trangchu-admin.php?page_layout=update-product&id=<?php echo $row['id']; ?>">Cập nhật</a>
                <a class="delete" href="trangchu-admin.php?page_layout=process-delete-product&id=<?php echo $row['id']; ?>">Xoá</a>
            </td>   
            
        </tr>
        <?php } ?>
    </table>
</body>
</html>