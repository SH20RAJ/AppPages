<?php

function crawl_website($url) {
    $html = file_get_contents($url);
    $dom = new DOMDocument;
    libxml_use_internal_errors(true); // Ignore HTML parsing errors
    $dom->loadHTML($html);
    libxml_clear_errors();

    $urls = [];
    $links = $dom->getElementsByTagName('a');
    foreach ($links as $link) {
        $href = $link->getAttribute('href');
        if (strpos($href, 'http') !== false) {
            $urls[] = $href;
        } elseif (strpos($href, '/') === 0) {
            $urls[] = $url . $href;
        }
    }

    return $urls;
}

function generate_sitemap($url) {
    $urls = crawl_website($url);

    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

    foreach ($urls as $url) {
        $urlElement = $xml->addChild('url');
        $urlElement->addChild('loc', htmlspecialchars($url));
        $urlElement->addChild('lastmod', date('Y-m-d'));
    }

    $sitemapContent = $xml->asXML();
    
    // Set appropriate headers for file download
    header('Content-Disposition: attachment; filename="sitemap.xml"');
    header('Content-Type: application/xml');
    header('Content-Length: ' . strlen($sitemapContent));
    
    // Output the sitemap content
    echo $sitemapContent;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $websiteUrl = $_POST['website_url'];
    generate_sitemap($websiteUrl);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sitemap Generator</title>
</head>
<body>
    <h1>Sitemap Generator</h1>
    <p>Enter the website URL to generate a sitemap.</p>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="website_url" placeholder="Website URL" required>
        <button type="submit">Generate Sitemap</button>
    </form>
</body>
</html>
