<?php
    include('config.php');

    // Xử lý khi form được submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $singer = $_POST["singer"];
        $duration = $_POST["duration"];

        // Xử lý upload ảnh
        $image_name = './assets/img/songs/' . $_FILES["image"]["name"];
        $image_tmp = $_FILES["image"]["tmp_name"];
        move_uploaded_file($image_tmp, "." . $image_name);

        // Xử lý upload MP3
        $mp3_name = "./assets/music/list-song/" . $_FILES["mp3"]["name"];
        $mp3_tmp = $_FILES["mp3"]["tmp_name"];
        move_uploaded_file($mp3_tmp, "." . $mp3_name);

        // Chuẩn bị truy vấn SQL để thêm bài hát vào cơ sở dữ liệu
        $sql = "INSERT INTO songs (name, singer, duration, background, pathSong) VALUES ('$name', '$singer', '$duration', '$image_name', '$mp3_name')";

        if ($conn->query($sql) === TRUE) {
            echo "Bài hát đã được thêm thành công!";
            header("Location: ../handle/getMusic.php");
            header("Location: ../admin/index.php");
            exit();
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }

    // Đóng kết nối
    $conn->close();
?>
