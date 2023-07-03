<?php

// Prepare and execute the query
$uploaderId = 2;
$sql = "SELECT app_name, app_icon, upload_time FROM apps WHERE uploader_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $uploaderId);
$stmt->execute();
$result = $stmt->get_result();

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data in a table with CSS styling
    echo '<table>';
    echo '<tr>';
    echo '<th>App Name</th>';
    echo '<th>App Icon</th>';
    echo '<th>Upload Date</th>';
    echo '<th>Edit</th>';
    echo '</tr>';

    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Access the app information
        $appName = $row["app_name"];
        $appIcon = $row["app_icon"];
        $uploadDate = $row["upload_time"];

        // Display the app details in the table
        echo '<tr>';
        echo '<td>' . $appName . '</td>';
        echo '<td><img src="' . $appIcon . '" alt="App Icon" width="50" height="50"></td>';
        echo '<td>' . $uploadDate . '</td>';
        echo '<td><a href="edit_app.php?app_name=' . urlencode($appName) . '">Edit</a></td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No apps found.";
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();

?>