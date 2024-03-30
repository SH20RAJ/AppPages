<?php
// Fetch JSON data from the URLs
$urls = [
    'https://ws2-cache.aptoide.com/api/7/listApps?limit=1000&offset=2&sort=trending60d',
    'https://ws2-cache.aptoide.com/api/7/listApps?limit=1000&offset=300&sort=trending60d',
    'https://ws2-cache.aptoide.com/api/7/listApps?limit=1000&offset=4&sort=trending60d'
];

$allData = [];

foreach ($urls as $url) {
    $json = file_get_contents($url);
    $data = json_decode($json, true);

    // Check if data was successfully retrieved
    if ($data && isset($data['datalist']['list']) && !empty($data['datalist']['list'])) {
        $allData = array_merge($allData, $data['datalist']['list']);
    }
}

// Start building the sitemap
$xml = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// Iterate through each item in the combined list
foreach ($allData as $item) {
    $uname = $item['uname'];
    $loc = "https://appspages.online/app/$uname";

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
