<?php
// Disable CORS and allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Create a cURL resource
$curl = curl_init();

$url = $_GET['p'];

// Append a unique query parameter to the URL
$timestamp = time();
$urlWithQuery = $url . '?timestamp=' . $timestamp;

// Set the URL you want to fetch
curl_setopt($curl, CURLOPT_URL, $urlWithQuery);

// Return the transfer as a string
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Disable caching using Cache-Control header
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Cache-Control: no-cache'));

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
