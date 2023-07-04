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
    $currentTimestamp = date('Y-m-d H:i:s', strtotime('now'));

    $sql = "UPDATE apps SET app_name='$appName', app_description='$appDescription', screenshots='$screenshots', app_url='$appURL', app_category='$appCategory', supported_platforms='$supportedPlatforms', app_icon='$appIcon', app_size='$appSize', app_version='$appVersion', update_time='$currentTimestamp' WHERE app_id='$appId' AND uploader_id='$uploaderId'";
        
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
        
        <div class="other"><a href="../../view/'.$appId.'"><button style="background:blue;">View</button></a></div>
        <hr>
        <p style="color: red;">Caution: Deleting this app will permanently remove it from the system. This action cannot be undone. Are you sure you want to proceed?</p>
        <hr>
        <form method="post" action="delete.php">
            <input type="hidden" name="app_id" value="' . $appId . '">
            <input style="background:red;" type="submit" value="Delete App">
        </form>
        <hr>
        
        
        ';
    } else {
        echo "App not found.";
    }
}

// Close the database connection
$conn->close();

?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
    }
    .msg {
        background: green;
        padding : 10px;
        text-align:center;
        color:skyblue;
    }

    form, .other {
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

    input[type="submit"], button {
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

