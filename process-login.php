<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql)

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['quyen_id'];

    if ($user['role'] === '2') {
        header('Location: admin.php');
    } else {
        header('Location: user.php');
    }
    exit();
} else {
    echo "Tên đăng nhập hoặc mật khẩu không đúng.";
    echo '<br><a href="login.php">Quay lại</a>';
}
?>
