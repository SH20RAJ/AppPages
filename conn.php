<?php

$databaseUrl = "postgres://default:WHLQC1tdcsA0@ep-weathered-bonus-818956.ap-southeast-1.postgres.vercel-storage.com:5432/verceldb";

// Connect to the PostgreSQL database
$conn = pg_connect($databaseUrl);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
