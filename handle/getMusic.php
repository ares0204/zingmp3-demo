<?php
    // Thông tin kết nối đến cơ sở dữ liệu MySQL
    $host = 'localhost';
    $db = 'zingmp3';
    $user = 'root';
    $pass = '';

    // Tạo kết nối đến MySQL bằng PDO
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Kết nối không thành công: " . $e->getMessage());
    }

        // Thực hiện truy vấn SQL để lấy dữ liệu từ bảng
    $query = "SELECT * FROM songs";
    $statement = $pdo->prepare($query);
    $statement->execute();

    // Lấy tất cả các dòng từ kết quả truy vấn
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Chuyển đổi kết quả thành định dạng JSON
    $json_data = json_encode($result, JSON_PRETTY_PRINT);

    // In kết quả hoặc lưu vào tệp JSON
    // echo $json_data;

    // Hoặc lưu vào tệp JSON
    file_put_contents('../data.json', $json_data);

    // Đóng kết nối
    $pdo = null;
?>
