<?php

// Check if the form is submitted and the required fields are provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["app_id"])) {
    // Retrieve the form data
    $appName = $_POST["app_name"];
    $appCategory = $_POST["app_category"];
    $appDescription = $_POST["app_description"];
    $appVersion = $_POST["app_version"];
    $supportedPlatforms = $_POST["supported_platforms"];
    $appIcon = $_POST["app_icon"];
    $appSize = $_POST["app_size"];
    $packageName = $_POST["package_name"];
    $uploaderId = $_POST["uploader_id"];
    $screenshots = $_POST["screenshots"];
    $hosting = $_POST["hosting"];
    $appURL = $_POST["app_url"];
    $verified = isset($_POST["verified"]) ? 1 : 0;
    $downloads = $_POST["downloads"];
    $views = $_POST["views"];

    // Prepare and execute the update query
    $sql = "UPDATE apps SET app_category = ?, app_description = ?, app_version = ?, supported_platforms = ?, app_icon = ?, app_size = ?, package_name = ?, screenshots = ?, hosting = ?, app_url = ?, verified = ?, downloads = ?, views = ? WHERE app_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssiiis", $appCategory, $appDescription, $appVersion, $supportedPlatforms, $appIcon, $appSize, $packageName, $screenshots, $hosting, $appURL, $verified, $downloads, $views, $appName);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "App details updated successfully.";
    } else {
        echo "Unable to update app details.";
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();

?>
