<?php
// Fetch JSON data from the URL
$url = 'https://ws2-cache.aptoide.com/api/7/listApps?limit=10&offset=2&sort=trending60d';
$json = file_get_contents($url);

// Decode JSON data
$data = json_decode($json, true);

// Check if data was successfully retrieved
if ($data && isset($data['datalist']['list']) && !empty($data['datalist']['list'])) {
    // Start building the sitemap
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    // Iterate through each item in the list
    foreach ($data['datalist']['list'] as $item) {
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
} else {
    // Handle error if data is empty or not in expected format
    echo "Error: Unable to fetch or process data.";
}
?>
