<?php
// Initialize variables for storing form data
$appId = $appName = $appDescription = $screenshots = $appURL = $appCategory = $supportedPlatforms = $appIcon = $appSize = $appVersion = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $appId = $_POST["app_id"];
    $appName = $_POST["app_name"];
    $appDescription = $_POST["app_description"];
    $screenshots = $_POST["screenshots"];
    $appURL = $_POST["app_url"];
    $appCategory = $_POST["app_category"];
    $supportedPlatforms = $_POST["supported_platforms"];
    $appIcon = $_POST["app_icon"];
    $appSize = $_POST["app_size"];
    $appVersion = $_POST["app_version"];
    $uploaderId = $_SESSION['uploader_id'];

    // Update the app details in the database
    $sql = "UPDATE apps SET app_name='$appName', app_description='$appDescription', screenshots='$screenshots', app_url='$appURL', app_category='$appCategory', supported_platforms='$supportedPlatforms', app_icon='$appIcon', app_size='$appSize', app_version='$appVersion' WHERE app_id='$appId' AND uploader_id='$uploaderId'";
    
    if ($conn->query($sql) === TRUE) {
        echo "App details updated successfully.";
    } else {
        echo "Error updating app details: " . $conn->error;
    }
}

// Check if the app_id parameter is provided in the URL
if (isset($_GET['app_id'])) {
    $appId = $_GET['app_id'];
    $uploaderId = $_SESSION['uploader_id'];

    // Retrieve the details of the app from the database
    $sql = "SELECT app_name, app_description, screenshots, app_url, app_category, supported_platforms, app_icon, app_size, app_version FROM apps WHERE app_id='$appId' AND uploader_id='$uploaderId'";
    $result = $conn->query($sql);

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
        $appIcon = $row["app_icon"];
        $appSize = $row["app_size"];
        $appVersion = $row["app_version"];

        // Display a form to edit the app details
        echo '
        <form method="post" action="">
            <label>App ID:</label>
            <input type="text" name="app_id" value="' . $appId . '" readonly><br><br>
            
            <label>App Name:</label>
            <input type="text" name="app_name" value="' . $appName . '"><br><br>
            
            <label>App Description:</label>
            <textarea name="app_description">' . $appDescription . '</textarea><br><br>
            
            <label>Screenshots:</label>
            <textarea name="screenshots">' . $screenshots . '</textarea><br><br>
            
            <label>App URL:</label>
            <input type="text" name="app_url" value="' . $appURL . '"><br><br>
            
            <label>App Category:</label>
            <input type="text" name="app_category" value="' . $appCategory . '"><br><br>
            
            <label>Supported Platforms:</label>
            <input type="text" name="supported_platforms" value="' . $supportedPlatforms . '"><br><br>
            
            <label>App Icon:</label>
            <input type="text" name="app_icon" value="' . $appIcon . '"><br><br>
            
            <label>App Size:</label>
            <input type="text" name="app_size" value="' . $appSize . '"><br><br>
            
            <label>App Version:</label>
            <input type="text" name="app_version" value="' . $appVersion . '"><br><br>
            
            <input type="submit" value="Update">
        </form>
        ';
        
        // Delete App button
        echo '<br>
        <form method="post" action="delete.php">
            <input type="hidden" name="app_id" value="' . $appId . '">
            <input type="submit" value="Delete App">
        </form>';
    } else {
        echo "App not found.";
    }
}

// Close the database connection
$conn->close();

?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    img {
        max-width: 50px;
        max-height: 50px;
    }

    a {
        text-decoration: none;
        color: #0000FF;
    }
</style>
