<?php
include '../conn.php';
$id = $_GET['id'];
$url = $_GET['url'];
$sql = "UPDATE apps SET downloads = downloads + 1 where package_name='".$_GET['id']."' or app_id='".$_GET['id']."'";
if($conn->query($sql)){
    header('Location : '.$url.');
} 
?>