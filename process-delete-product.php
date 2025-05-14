<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM `product` WHERE id = '$id'";
    mysqli_query($conn, $sql);
    header('location: trangchu-admin.php?page_layout=trangchu');
?>