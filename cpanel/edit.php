<?php

// Check if the app_name parameter is provided in the URL
if (isset($_REQUEST['app_id'])) {
    $appName = $_REQUEST['app_id'];

    // Retrieve the details of the app from the database
    $sql = "SELECT * FROM apps WHERE app_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $appName);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the app exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

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

        // Display a form to edit the app details
        echo '
        <form method="post" action="update.php">
            <label>App Name:</label>
            <input type="text" name="app_name" value="' . $appName . '" readonly><br><br>
            
            <label>App Category:</label>
            <input type="text" name="app_category" value="' . $appCategory . '"><br><br>
            
            <label>App Description:</label>
            <textarea name="app_description">' . $appDescription . '</textarea><br><br>
            
            <label>App Version:</label>
            <input type="text" name="app_version" value="' . $appVersion . '"><br><br>
            
            <label>Supported Platforms:</label>
            <input type="text" name="supported_platforms" value="' . $supportedPlatforms . '"><br><br>
            
            <label>App Icon:</label>
            <input type="text" name="app_icon" value="' . $appIcon . '"><br><br>
            
            <label>App Size:</label>
            <input type="text" name="app_size" value="' . $appSize . '"><br><br>
            
            <label>Package Name:</label>
            <input type="text" name="package_name" value="' . $packageName . '"><br><br>
            
            <label>Uploader ID:</label>
            <input type="text" name="uploader_id" value="' . $uploaderId . '" readonly><br><br>
            
            <label>Screenshots:</label>
            <input type="text" name="screenshots" value="' . $screenshots . '"><br><br>
            
            <label>Hosting:</label>
            <input type="text" name="hosting" value="' . $hosting . '"><br><br>
            
            <label>App URL:</label>
            <input type="text" name="app_url" value="' . $appURL . '"><br><br>
            
            <label>Verified:</label>
            <input type="checkbox" name="verified" ' . ($verified ? 'checked' : '') . '><br><br>
            
            <label>Downloads:</label>
            <input type="number" name="downloads" value="' . $downloads . '"><br><br>
            
            <label>Views:</label>
            <input type="number" name="views" value="' . $views . '"><br><br>
            
            <input type="submit" value="Update">
        </form>
        ';
    } else {
        echo "App not found.";
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();

?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    textarea,
    input[type="number"],
    input[type="checkbox"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }

    textarea {
        height: 100px;
    }

    input[type="checkbox"] {
        display: inline;
        width: auto;
        margin-bottom: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
