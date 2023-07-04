<?php

// Create a cURL resource
$curl = curl_init();

// Set the URL you want to fetch
curl_setopt($curl, CURLOPT_URL, 'https://tik.porn/');

// Return the transfer as a string
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($curl);

// Close cURL resource
curl_close($curl);

// Find the content of id="__NEXT_DATA__"
preg_match('/<script id="__NEXT_DATA__" type="application\/json">(.*?)<\/script>/s', $response, $matches);

// Extract the JSON content
$jsonContent = $matches[1];

// Set the appropriate headers
header('Content-Type: application/json');

// Output the JSON content
echo $jsonContent;

?>
