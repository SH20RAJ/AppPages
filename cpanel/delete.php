<?php

// Check if the app_id is provided in the POST request
if (isset($_POST['app_id'])) {
    $appId = $_POST['app_id'];
    $uploaderId = $_SESSION['uploader_id'];

    // Delete the app from the database
    $sql = "DELETE FROM apps WHERE app_id='$appId' AND uploader_id='$uploaderId'";

    if ($conn->query($sql) === TRUE) {
        echo "App deleted successfully.";
    } else {
        echo "Error deleting app: " . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>
