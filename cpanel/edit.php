<?php

// Initialize variables for storing form data
$appName = $appDescription = $screenshots = $appURL = $appCategory = $supportedPlatforms = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $appName = $_POST["app_name"];
    $appDescription = $_POST["app_description"];
    $screenshots = $_POST["screenshots"];
    $appURL = $_POST["app_url"];
    $appCategory = $_POST["app_category"];
    $supportedPlatforms = $_POST["supported_platforms"];

    // Prepare and execute the update query
    $sql = "UPDATE apps SET app_description=?, screenshots=?, app_url=?, app_category=?, supported_platforms=? WHERE app_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $appDescription, $screenshots, $appURL, $appCategory, $supportedPlatforms, $_GET["app_id"]);

    if ($stmt->execute()) {
        echo "App details updated successfully.";
    } else {
        echo "Error updating app details: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Check if the app_id parameter is provided in the URL
if (isset($_GET['app_id'])) {
    $appId = $_GET['app_id'];

    // Retrieve the details of the app from the database
    $sql = "SELECT app_name, app_description, screenshots, app_url, app_category, supported_platforms FROM apps WHERE app_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $appId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the app exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Access the app information
        $appName = $row["app_name"];
        $appDescription = $row["app_description"];
        $screenshots = $row["screenshots"];
        $appURL = $row["app_url"];
        $appCategory = $row["app_category"];
        $supportedPlatforms = $row["supported_platforms"];

        // Display a form to edit the app details
        echo '
        <form method="post" action="">
            <label>App Name:</label>
            <input type="text" name="app_name" value="' . $appName . '" ><br><br>
            
            <label>App Description:</label>
            <textarea name="app_description">' . $appDescription . '</textarea><br><br>
            
            <label>Screenshots:</label>
            <input type="text" name="screenshots" value="' . $screenshots . '"><br><br>
            
            <label>App URL:</label>
            <input type="text" name="app_url" value="' . $appURL . '"><br><br>
            
            <label>App Category:</label>
            <input type="text" name="app_category" value="' . $appCategory . '"><br><br>
            
            <label>Supported Platforms:</label>
            <input type="text" name="supported_platforms" value="' . $supportedPlatforms . '"><br><br>
            
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
    textarea {
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

