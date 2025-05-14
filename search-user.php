<table border=1>
        <tr>
            <th>Mã </th>
            <th>Họ và tên</th>
            <th>Tên đăng nhập</th>
            <th>Mật khẩu</th>
        </tr>
        <?php
            if(isset($_POST['keyword'])){
                $keyword = $_POST['keyword'];
            }
            else{
                $keyword = '';
            }
            $sql = "select * from user where ho_va_ten like'%".$keyword."%'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){   
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['ho_va_ten']; ?></td>
                    <td><?php echo $row['ten_dang_nhap']; ?></td>
                    <td><?php echo $row['mat_khau']; ?></td>
                    
                </tr>
                <?php }

?>
</table>