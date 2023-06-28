<?php
header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php
    function getURLs($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                $results[] = "https://appspages.sh20raj.com" . substr($path, strlen($_SERVER['DOCUMENT_ROOT']));
            } else if ($value != "." && $value != "..") {
                getURLs($path, $results);
                $results[] = "https://appspages.sh20raj.com" . substr($path, strlen($_SERVER['DOCUMENT_ROOT']));
            }
        }

        return $results;
    }

    $urls = getURLs($_SERVER['DOCUMENT_ROOT']);

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
