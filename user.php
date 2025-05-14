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
            <form action="trangchu-admin.php?page_layout=search-user"method="POST">
                <input type="text" placeholder="Tìm kiếm sản phẩm..." name="keyword">
                <input type="submit" name="search" value="Tìm kiếm">
            </form>
        </div>
    <h1>Thông tin sinh viên</h1>
    <table border=1>
        <tr>
            <th>Mã</th>
            <th>Họ và tên</th>
            <th>Tên đăng nhập</th>
            <th>Mật khẩu</th>
     
         
        </tr>
        <?php
            $sql = "select * from user where quyen_id = 1";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['ho_va_ten']; ?></td>
            <td><?php echo $row['ten_dang_nhap']; ?></td>
            <td><?php echo $row['mat_khau']; ?></td>
           
            
        </tr>
        <?php } ?>
    </table>
</body>
</html>