<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            
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
<table border=1 >
        <tr>
            <th>Mã </th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>ảnh</th>
            
        </tr>
        <?php
            $id=$_GET['id'];
            $sql2 = "select * from user where ten_dang_nhap like'%".$id."%'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($result2);
            $keyword = $row2['id'];
            $sql = "select * from cart where id_user like'%".$keyword."%'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['san_pham']; ?></td>
                    <td><?php echo $row['so_luong']; ?></td>
                    <td><img src="<?php echo $row['anh']; ?>" width=100px></td>
                   
                </tr>
                <?php }

?>
</table>
</body>
</html>