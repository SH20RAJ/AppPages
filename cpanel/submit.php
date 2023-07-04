<div class="submit_section">
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var form = document.getElementById("myForm");

            form.addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent form submission

                // Perform any additional processing or validation here

                // Example: Display a success message
                alert("Form submitted successfully!");

                // Optionally, you can manually reset the form after submission
                // form.reset();
            });
        });
    </script>
<?php
$uploaderId = $_SESSION['username'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $appName = $_POST['app_name'];
    $appCategory = $_POST['app_category'];
    $appDescription = htmlspecialchars($_POST['app_description'], ENT_QUOTES);
    $appVersion = $_POST['app_version'];
    $supportedPlatforms = $_POST['supported_platforms'];
    $appIcon = $_POST['app_icon'];
    $appSize = $_POST['app_size'];
    $packageName = $_POST['package_name'];
    $screenshotUrls = $_POST['screenshots'];
    $appUrl = $_POST['app_url'];
    $uploaderId = $_SESSION['uploader_id'];

    // Split the screenshot URLs by newline character and trim any leading/trailing whitespace
    $screenshotUrlsArray = array_map('trim', explode("\n", $screenshotUrls));

    // Convert the array of screenshot URLs into a string for database insertion
    $screenshotPaths = implode(',', $screenshotUrlsArray);


    // Prepare and execute the SQL query to insert the data into the apps table
   $sql = "INSERT INTO apps (app_name, app_category, app_description, app_version, supported_platforms, app_icon, app_size, package_name, screenshots, app_url, uploader_id)
            VALUES ('$appName', '$appCategory', '$appDescription', '$appVersion', '$supportedPlatforms', '$appIcon', '$appSize', '$packageName', '$screenshotPaths', '$appUrl', '$uploaderId')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='msg' style='color:blue;'> App uploaded successfully! ☑️ </div><script>setTimeout(function(){window.location.href="../cpanel/?p=apps"},500)</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();
}
?>

    <style>

        h1 {
            text-align: center;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea,input[type="url"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type="number"] {
            width: 100px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>

    <h1>App Upload Form</h1>
        <form action="" method="post" enctype="multipart/form-data" id="myForm">
            <label for="app_name">App Name:</label>
            <input type="text" name="app_name" id="app_name" required>
            <br><br>

            <label for="app_category">App Category:</label>
            <select name="app_category" id="app_category" required>
                <option value="Games">Games</option>
                <option value="Social">Social</option>
                <option value="Productivity">Productivity</option>
                <!-- Add more options as needed -->
            </select>
            <br><br>

            <label for="app_description">App Description:</label>
            <textarea name="app_description" id="app_description" rows="4"></textarea>
            <br><br>

            <label for="app_version">App Version:</label>
            <input type="text" name="app_version" id="app_version">
            <br><br>

            <label for="supported_platforms">Supported Platforms:</label>
            <select name="supported_platforms" id="supported_platforms" required>
                <option value="Android">Android</option>
                <option value="iOS">iOS</option>
                <option value="Windows">Windows</option>
                <!-- Add more options as needed -->
            </select>
            <br><br>

            <label for="app_icon">App Icon URL:</label>
            <input type="url" name="app_icon" id="app_icon">
            <br><br>

            <label for="app_size">App Size (in bytes):</label>
            <input type="number" name="app_size" id="app_size">
            <br><br>

            <label for="package_name">Package Name:</label>
            <input type="text" name="package_name" id="package_name">
            <br><br>

            <label for="screenshots">Screenshots (Enter URLs, one per line):</label>
            <textarea name="screenshots" id="screenshots" rows="4"></textarea>
            <br><br>

            <label for="app_url">App URL:</label>
            <input type="url" name="app_url" id="app_url">
            <br><br>

            <input type="submit" value="Upload App">
        </form>
</div>
