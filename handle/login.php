<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["firstName"] = $row["firstName"];
        $_SESSION["lastName"] = $row["lastName"];
    
        if ($row["type"] == "admin") {
            header("Location: ../admin/index.php");
            exit();
        } else {
            header("Location: ../index.php");
            exit();
        }
    } else {
        echo "<h3>Sai tên đăng nhập hoặc mật khẩu!</h3>";
    }

    $conn->close();
}
?>
