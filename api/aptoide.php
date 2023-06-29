<?php
if(isset($_GET['url'])){
  $url = $_GET['url'];
} elseif(isset($_GET['app_id'])) {
  $url = "https://".$_GET['app_id'].".en.aptoide.com/app";
} elseif(isset($_GET['search'])){
    $url = "https://web-api-cache.aptoide.com/search?query=".$_GET['search']."&country=IN&mature=false";
}else {
  $url = "https://en.aptoide.com";  // Replace with your desired URL
}

// Retrieve the content of the URL
$content = file_get_contents($url);

// Find the script tag with the ID "__NEXT_DATA__"
$pattern = '/<script\s+id="__NEXT_DATA__"\s+type="application\/json">(.*?)<\/script>/s';
preg_match($pattern, $content, $matches);

if (isset($matches[1])) {
    // The content within the script tag
    $scriptContent = $matches[1];
    
    // Decode the JSON content
    $decodedContent = json_decode($scriptContent, true);

    // Set the appropriate content-type header
    header('Content-Type: application/json');
    
    // Return the content as JSON
    echo json_encode($decodedContent,JSON_PRETTY_PRINT);
} elseif(isset($_GET['search'])){
// Fetch the JSON data
$jsonData = file_get_contents($url);
// Decode the JSON data
$data = json_decode($jsonData, true);
header('Content-Type: application/json');
echo json_encode($data,JSON_PRETTY_PRINT);
  
} else {
    // If the script tag is not found
    header('Content-Type: application/json');
    echo json_encode(array("error" => "Script tag with ID '__NEXT_DATA__' not found."));
}
