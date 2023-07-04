<?php
include '../conn.php';
$id = $_GET['id'];
$url = urldecode($_GET['url']);
$sql = "UPDATE apps SET downloads = downloads + 1 WHERE package_name='" . $id . "' OR app_id='" . $id . "'";
if ($conn->query($sql)) {
    header('Location: ' . $url);
    exit(); // It's a good practice to include an exit statement after a header redirect
} else {
    echo "Error updating downloads count: " . $conn->error;
}
?>
