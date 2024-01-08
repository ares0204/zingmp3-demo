<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Truy vấn kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["firstName"] = $row["firstName"];
        $_SESSION["lastName"] = $row["lastName"];
    
        if ($row["type"] == "admin") {
            // Người dùng là admin, chuyển hướng đến trang admin
            header("Location: ../admin/index.php");
            exit();
        } else {
            // Người dùng không phải là admin, chuyển hướng đến trang người dùng thông thường
            header("Location: ../index.php");
            exit();
        }
    } else {
        // Sai tên đăng nhập hoặc mật khẩu
        echo "<h3>Sai tên đăng nhập hoặc mật khẩu!</h3>";
    }

    // Close the statement and connection
    $conn->close();
}
?>
