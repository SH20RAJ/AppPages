<?php

// Prepare and execute the query
$uploaderId = 2;
$sql = "SELECT * FROM apps WHERE uploader_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $uploaderId);
$stmt->execute();
$result = $stmt->get_result();

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Access the app information
        $appName = $row["app_name"];
        $appCategory = $row["app_category"];
        $appDescription = $row["app_description"];
        $appVersion = $row["app_version"];
        $supportedPlatforms = $row["supported_platforms"];
        $appIcon = $row["app_icon"];
        $appSize = $row["app_size"];
        $packageName = $row["package_name"];
        $uploaderId = $row["uploader_id"];
        $screenshots = $row["screenshots"];
        $uploadTime = $row["upload_time"];
        $hosting = $row["hosting"];
        $appURL = $row["app_url"];
        $verified = $row["verified"];
        $downloads = $row["downloads"];
        $views = $row["views"];

        // Do something with the app information
        echo "App Name: " . $appName . "<br>";
        echo "App Category: " . $appCategory . "<br>";
        // Continue with other app details...

        echo "<br>";
    }
} else {
    echo "No apps found.";
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>