<?php
    include('config.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_song_id"])) {
        $songId = $_POST["delete_song_id"];

        // Perform the deletion query
        $sql = "DELETE FROM songs WHERE id = $songId";
        if ($conn->query($sql) === TRUE) {
            // Deletion successful
            header("Location: ../handle/getMusic.php");
            header("Location: ../admin/index.php");
            exit();
        } else {
            // Handle deletion error
            echo "Error deleting record: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
?>

