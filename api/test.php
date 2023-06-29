<?php
$url = "https://apppages.sh20raj.repl.co/api/aptoide.php";  // Replace with the URL of your JSON file


// Fetch the JSON data
$jsonData = file_get_contents($url);

// Decode the JSON data
echo $data = json_decode($jsonData, true);  // Set the second parameter to 'true' for associative array

?>