<?php

include 'conn.php';

$uniqueId = $_REQUEST['id'];

// Retrieve the app details based on the unique ID
$query = "SELECT * FROM apps WHERE uniqueid = $1";
$result = pg_query_params($conn, $query, array($uniqueId));

// Check if the query was successful
if (!$result) {
    die("Query failed: " . pg_last_error($conn));
}

// Fetch the app details as an associative array
$appDetails = pg_fetch_assoc($result);

// Check if the app details were found
if (!$appDetails) {
    echo "App details not found.";
} else {
    // Output the app details
    echo '<h2>App Details:</h2>';
    echo '<p>Name: ' . $appDetails['name'] . '</p>';
    echo '<p>Description: ' . $appDetails['description'] . '</p>';
    echo '<p>Category: ' . $appDetails['category'] . '</p>';
    // Include other app details here
}

pg_close($conn);

?>
