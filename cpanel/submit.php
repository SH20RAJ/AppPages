<div class="submit_section">
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
        echo "<div class='msg' style='color:blue;'> App uploaded successfully! ☑️ </div><script>setTimeout(function(){window.location.href='../cpanel/?p=apps'},500)</script>";
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
            <option value="Finance">Finance</option>
            <option value="Health">Health</option>
            <option value="Education">Education</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Shopping">Shopping</option>
            <option value="Travel">Travel</option>
            <option value="Music">Music</option>
            <option value="Food">Food</option>
            <option value="Sports">Sports</option>
            <option value="News">News</option>
            <option value="Weather">Weather</option>
            <option value="Lifestyle">Lifestyle</option>
            <option value="Utilities">Utilities</option>
            <option value="Photography">Photography</option>
            <option value="Books">Books</option>
            <option value="Art">Art</option>
            <option value="Communication">Communication</option>
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
            <div id="dropzone">Drag and drop an icon here</div>
            <input type="file" id="fileInput" onchange="handleFileInputChange(event)" style="display: none;">
            <label for="fileInput" style="display: block; text-align: center; cursor: pointer;">Select Image</label>
            <input type="url" name="app_icon" id="app_icon">
            <br><br>

            <label for="app_size">App Size (in bytes):</label>
            <input type="number" name="app_size" id="app_size">
            <br><br>

            <label for="package_name">Package Name:</label>
            <input type="text" name="package_name" id="package_name">
            <br><br>
            <div id="dropzone" style="width: 300px; height: 200px; border: 2px dashed #ccc; border-radius: 5px; text-align: center; line-height: 200px; margin: 20px auto;">Drag and drop images here</div>
            <input type="file" id="fileInput" multiple onchange="handleFileInputChange(event)" style="display: none;">
            <label for="fileInput" style="display: block; text-align: center; cursor: pointer;">Select Images</label>
            <span>Enter Screenshot URLs (one-per-line) | <a target="_blank" href="https://www.youtube.com/watch?v=ENz0cu0rFXI">Free Image Hosting</a></span>
            <textarea name="screenshots" id="screenshots" rows="10" cols="50" ></textarea>

            <script>
                const dropzone = document.getElementById('dropzone');
                const screenshotsTextarea = document.getElementById('screenshots');

                // Prevent default behavior for drag events
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropzone.addEventListener(eventName, preventDefaults, false);
                });

                // Handle drag enter and drag over events
                function preventDefaults(event) {
                event.preventDefault();
                event.stopPropagation();
                }

                // Handle drop event
                dropzone.addEventListener('drop', handleDrop, false);

                // Handle file input change event
                function handleFileInputChange(event) {
                const files = event.target.files;
                uploadFiles(files);
                }

                // Handle dropped images
                function handleDrop(event) {
                const files = event.dataTransfer.files;
                uploadFiles(files);
                }

                // Upload multiple files to Imgur
                function uploadFiles(files) {
                const clientId = '6db47bd7029562d'; // Replace with your Imgur client ID

                // Loop through each file and upload to Imgur
                Array.from(files).forEach(file => {
                    const formData = new FormData();
                    formData.append('image', file);

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', 'https://api.imgur.com/3/image');
                    xhr.setRequestHeader('Authorization', `Client-ID ${clientId}`);
                    xhr.onload = function () {
                    if (xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        const imgurLink = response.data.link;
                        addToScreenshotsTextarea(imgurLink);
                    } else {
                        console.error('Error uploading image to Imgur:', xhr.status);
                    }
                    };
                    xhr.send(formData);
                });
                }

                // Add image link to screenshots textarea
                function addToScreenshotsTextarea(imgurLink) {
                screenshotsTextarea.value += imgurLink + '\n';
                }
            </script>


            <br><br>

            <label for="app_url">App URL: <a target="_blank" href="https://github.com/new">Free File Hosting</a></span></label>
            <input type="url" name="app_url" id="app_url">
            <br><br>

            <input type="submit" value="Upload App">
        </form>
</div>
