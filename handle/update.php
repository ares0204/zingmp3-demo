<?php
    include('config.php');
    session_start();

    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['singer']) && isset($_POST['duration'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $singer = $_POST['singer'];
        $duration = $_POST['duration'];

        $image_name = $_POST['image'];
        $mp3_name = $_POST['mp3'];

        // Update the song record in the database
        $sql = "UPDATE songs SET name='$name', singer='$singer', duration='$duration', background='$image_name', pathSong='$mp3_name' WHERE id=$id";
        $result = $conn->query($sql);

        if ($result) {
            echo "Song updated successfully!";
            header("Location: ../handle/getMusic.php");
            header("Location: ../admin/index.php");
            exit();
        } else {
            echo "Error updating song: " . $conn->error;
        }
    }
?>
