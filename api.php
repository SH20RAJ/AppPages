<?php

$databaseUrl = "postgres://default:WHLQC1tdcsA0@ep-weathered-bonus-818956.ap-southeast-1.postgres.vercel-storage.com:5432/verceldb";

// Connect to the PostgreSQL database
$conn = pg_connect($databaseUrl);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Query to fetch all rows from the 'apps' table
$query = "SELECT * FROM apps";
$result = pg_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . pg_last_error($conn));
}

// Fetch all rows from the result as an associative array
$rows = pg_fetch_all($result);

// Close the database connection
pg_close($conn);

// Set the appropriate content-type header for JSON response
header('Content-Type: application/json');

// Convert the array to JSON
$json = json_encode($rows);

// Output the JSON data
echo $json;
?>
