<?php

function generate_sitemap($urls) {
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

    foreach ($urls as $url) {
        $urlElement = $xml->addChild('url');
        $urlElement->addChild('loc', htmlspecialchars($url));
        $urlElement->addChild('lastmod', date('Y-m-d'));
    }

    $xml->asXML('sitemap.xml');
}

// Example list of URLs
$urls = [
    "https://example.com/page1",
    "https://example.com/page2",
    // Add more URLs here
];

generate_sitemap($urls);
