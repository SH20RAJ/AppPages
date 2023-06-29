<?php
$url = 'https://example.com/';  // Replace with the URL of your JSON file


// Fetch the JSON data
echo $jsonData = file_get_contents($url);

// Decode the JSON data
//echo $data = json_decode($jsonData, true);  // Set the second parameter to 'true' for associative array

?>