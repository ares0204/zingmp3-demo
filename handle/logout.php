<?php
    session_start();

    // Hủy bỏ tất cả các session
    session_destroy();

    // Chuyển hướng đến trang đăng nhập
    header('Location: ../index.php');
    exit();
?>
