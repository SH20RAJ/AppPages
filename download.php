<?php
include 'conn.php';
// Fetch app data from the "apps" table
echo $sql = "SELECT * FROM apps where package_name='".$_GET['id']."' or app_id='".$_GET['id']."' ";
$result = $conn->query($sql);

function bytesToMB($bytes) {
    $megabytes = round($bytes / 1024 / 1024 , 1);
    return $megabytes;
}


if ($result->num_rows > 0) {

        $appName = $row["app_name"];
        $appCategory = $row["app_category"];
        $appDesc = $row["app_description"];
        $appVersion = $row["app_version"];
        $appIcon = $row["app_icon"];
        $appSize = bytesToMB($row["app_size"]);
        $packageName = $row["package_name"];
        $screenshots = explode(",", $row["screenshots"]);
        echo $appUrl = '../../assets/download.php?url='.urlencode($row["app_url"]).'&id='.$row["app_id"];

        //header("Location: $appUrl");

} else {
    echo "No App Found";
}


