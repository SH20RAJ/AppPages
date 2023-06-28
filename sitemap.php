<?php
header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php
    function extractURLs($pageURL) {
        $pageContent = file_get_contents($pageURL);
    
        $dom = new DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadHTML($pageContent);
        libxml_clear_errors();
    
        $baseUrl = "https://appspages.sh20raj.com";
    
        $urls = array();
        $links = $dom->getElementsByTagName('a');
    
        foreach ($links as $link) {
            $url = $link->getAttribute('href');
            if ($url && $url !== '#' && strpos($url, $baseUrl) !== false) {
                $urls[] = $url;
            }
        }
    
        return $urls;
    }
    

    // Example: Extract URLs from the homepage
    $pageURL = "https://appspages.sh20raj.com/";
    $urls = extractURLs($pageURL);

    foreach ($urls as $url) {
        echo '<url>';
        echo '<loc>' . htmlspecialchars($url) . '</loc>';
        echo '<lastmod>' . date("Y-m-d") . '</lastmod>';
        echo '<changefreq>daily</changefreq>';
        echo '<priority>1.0</priority>';
        echo '</url>';
    }
    ?>
</urlset>
