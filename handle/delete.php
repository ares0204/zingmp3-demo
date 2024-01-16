<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_song_id"])) {
    $songId = $_POST["delete_song_id"];

    $sql = "DELETE FROM songs WHERE id = $songId";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../handle/getMusic.php");
        header("Location: ../admin/index.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
