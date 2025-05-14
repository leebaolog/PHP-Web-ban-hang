<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        form{
            margin: 20px auto;
            width: 400px;
            height: 450px;
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
        }
        .row{
            margin-top: 20px;
            display: flex;
        }
    
        .button {

            display: inline-block;
            padding: 12px 30px;
            background-color: #e74c3c;
            color: #ffffff;
            text-decoration: none;
            border-radius: 25px;
            font-size: 1.2em;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <div class="box">
            <div class="row">
                <input type="text" name="username" size="30" placeholder="Tên đặng nhập">
            </div>
            <div class="row">
                <input type="password" name="password"size="30" placeholder="Mật khẩu">
            </div>
            <div class="row" style=" display: flex">
                    <input type="submit" value="Đăng nhập">   
                    <a href="add-user.php" class="button"></a>  
            </div>
        </div>
    </form>
    <?php
        include('connect.php');
      if(isset($_POST['username']) && isset($_POST['password'])){
       session_start();
       
       $userName = $_POST['username'];
       $passWord = $_POST['password'];
       
       $sql = "SELECT * FROM user WHERE ten_dang_nhap = '$userName' AND mat_khau = '$passWord'";
       $result = mysqli_query($conn,$sql);
       
       if ($result->num_rows > 0) {
           $user = $result->fetch_assoc();
           $_SESSION['username'] = $user['ten_dang_nhap'];
           $_SESSION['quyen_id'] = $user['quyen_id'];

       
           // Phân quyền
           if ($user['quyen_id'] === '2') {
               header('Location: trangchu-admin.php');
           } else {
               header('Location: trangchu-user.php');
           }
           exit();
       } else {
           echo "Tên đăng nhập hoặc mật khẩu không đúng.";
           echo '<br><a href="login.php">Quay lại</a>';
       }
    }
    ?>
</body>
</html>