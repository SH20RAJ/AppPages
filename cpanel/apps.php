<?php

// Prepare and execute the query
$uploaderId = $_SESSION['uploader_id'];
$sql = "SELECT app_id, app_name, app_icon, upload_time FROM apps WHERE uploader_id = ?";
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
        $appid = $row["app_id"];
        $appName = $row["app_name"];
        $appIcon = $row["app_icon"];
        $uploadDate = $row["upload_time"];

        // Display the app details in the table
        echo '<tr>';
        echo '<td><img src="' . $appIcon . '" alt="App Icon" width="50" height="50"></td>';
        echo '<td>' . $appName . '</td>';
        echo '<td>' . $uploadDate . '</td>';
        echo '<td><a href="?p=edit&app_id=' . $appid . '">Edit</a></td>';
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
