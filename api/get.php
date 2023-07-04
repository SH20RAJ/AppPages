<?php

// Create a cURL resource
$curl = curl_init();

$url = $_GET['p'];
// Set the URL you want to fetch
curl_setopt($curl, CURLOPT_URL, $url);

// Return the transfer as a string
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Disable caching
curl_setopt($curl, CURLOPT_FRESH_CONNECT, true);
curl_setopt($curl, CURLOPT_FORBID_REUSE, true);
curl_setopt($curl, CURLOPT_DNS_CACHE_TIMEOUT, 0);
curl_setopt($curl, CURLOPT_CACHE_NO_STORE, true);

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
