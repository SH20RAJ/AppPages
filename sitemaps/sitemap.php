<?php
// Number of apps per page
$limit = 10;

// Initial offset
$offset = 2;

// Total URLs fetched
$totalUrls = 0;

// Fetch JSON data from the URLs
$allData = [];

do {
    $url = "https://ws2-cache.aptoide.com/api/7/listApps?limit=$limit&offset=$offset&sort=trending60d";
    $json = file_get_contents($url);
    $data = json_decode($json, true);

    // Check if data was successfully retrieved
    if ($data && isset($data['datalist']['list']) && !empty($data['datalist']['list'])) {
        $allData = array_merge($allData, $data['datalist']['list']);
        $totalUrls += count($data['datalist']['list']);
    }

    // Update offset for the next iteration
    $offset = $data['datalist']['next'] ?? null;

    // Stop if total URLs reaches the total from API
    if ($totalUrls >= $data['datalist']['total']) {
        break;
    }

} while ($totalUrls < 10000);

// Start building the sitemap
$xml = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// Get the current host
$host = $_SERVER['HTTP_HOST'];

// Iterate through each item in the combined list
foreach ($allData as $item) {
    $uname = $item['uname'];
    // Construct URL using current host and path
    $loc = "https://$host/app/$uname";

    // Add URL to the sitemap
    $xml .= '
    <url>
        <loc>' . htmlspecialchars($loc) . '</loc>
        <lastmod>' . date('c') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>';
}

// End the sitemap
$xml .= '
</urlset>';

// Set the correct content type
header('Content-Type: application/xml');

// Output the XML
echo $xml;
?>
