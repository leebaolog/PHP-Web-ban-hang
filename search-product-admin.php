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
            <th>Giá</th>
            <th>ảnh</th>
            <th>Chức năng</th>
        </tr>
        <?php
            if(isset($_POST['keyword'])){
                $keyword = $_POST['keyword'];
            }
            else{
                $keyword = '';
            }
            $sql = "select * from product where san_pham like'%".$keyword."%'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['san_pham']; ?></td>
                    <td><?php echo $row['gia']; ?></td>
                    <td><img src="<?php echo $row['anh']; ?>" width=100px></td>
                    <td>
                        <a class="update" href="trangchu-admin.php?page_layout=update-product&id=<?php echo $row['id']; ?>">Cập nhật</a>
                        <a class="delete" href="trangchu-admin.php?page_layout=process-delete-product&id=<?php echo $row['id']; ?>">Xoá</a>
                    </td>   
                </tr>
                <?php }

?>
</table>
</body>
</html>