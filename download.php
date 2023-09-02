<?php
include 'conn.php';
// Fetch app data from the "apps" table
$sql = "SELECT * FROM apps where app_id='".$_GET['id']."' ";
$result = $conn->query($sql);

function bytesToMB($bytes) {
    $megabytes = round($bytes / 1024 / 1024 , 1);
    return $megabytes;
}


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
         $appName = $row["app_name"];
        $appCategory = $row["app_category"];
        $appDesc = $row["app_description"];
        $appVersion = $row["app_version"];
        $appIcon = $row["app_icon"];
        $appSize = bytesToMB($row["app_size"]);
        $packageName = $row["package_name"];
        $screenshots = explode(",", $row["screenshots"]);
        $appUrl = $row['app_url'];
        $appUrl2 = '../../assets/download.php?url='.urlencode($row["app_url"]).'&id='.$row["app_id"];

        //header("Location: $appUrl");

} else {
    echo "No App Found";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download - <?php echo $appName ?></title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <td><?php echo $appName; ?></td>
        </tr>
        <tr>
            <th>Category</th>
            <td><?php echo $appCategory; ?></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><?php echo $appDesc; ?></td>
        </tr>
        <tr>
            <th>Version</th>
            <td><?php echo $appVersion; ?></td>
        </tr>
        <tr>
            <th>Icon</th>
            <td><?php echo $appIcon; ?></td>
        </tr>
        <tr>
            <th>Size</th>
            <td><?php echo $appSize; ?></td>
        </tr>
        <tr>
            <th>Package Name</th>
            <td><?php echo $packageName; ?></td>
        </tr>
        <tr>
            <th>Screenshots</th>
            <td><?php echo implode(', ', $screenshots); ?></td>
        </tr>
        <tr>
            <th>App URL</th>
            <td><?php echo $appUrl; ?></td>
        </tr>
        <tr>
            <th>Supported Platforms</th>
            <td><?php echo $appplat; ?></td>
        </tr>
        <tr>
            <th>Upload Time</th>
            <td><?php echo $time; ?></td>
        </tr>
        <tr>
            <th>Update Time</th>
            <td><?php echo $update_time; ?></td>
        </tr>
        <tr>
            <th>Downloads</th>
            <td><?php echo $downloads; ?></td>
        </tr>
        <tr>
            <th>Views</th>
            <td><?php echo $views; ?></td>
        </tr>
        <tr>
            <th>Verified</th>
            <td><?php echo $verified; ?></td>
        </tr>
        <tr>
            <th>Rating</th>
            <td><?php echo $rating; ?></td>
        </tr>
        <tr>
            <th>Rating Counter</th>
            <td><?php echo $ratingcounter; ?></td>
        </tr>
        <tr>
            <th>Developer</th>
            <td><?php echo $developer; ?></td>
        </tr>
    </table>
</body>
</html>


