<?php
$url = 'https://appspages.sh20raj.com/api/aptoide.php';  // Replace with the URL of your JSON file


// Fetch the JSON data
 $jsonData = file_get_contents($url);

// Decode the JSON data
 $data = json_decode($jsonData, true);  // Set the second parameter to 'true' for associative array
$data = $data['props']['pageProps'];

$topAppsBundle = $data['topAppsBundle']['list'];


// Iterate through each app and display the details
foreach ($topAppsBundle as $app) {
    echo "Icon: <img src=\"" . $app['icon'] . "\" alt=\"" . $app['name'] . "\" width=\"50\" height=\"50\"><br>";
    echo "Name: " . $app['name'] . "<br>";
    echo "Score: " . $app['score'] . "<br>";
    echo "Size: " . $app['size'] . "<br>";
    echo "Store: " . $app['store'] . "<br>";
    echo "Package: " . $app['package'] . "<br><br>";
}
