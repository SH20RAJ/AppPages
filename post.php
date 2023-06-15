<?php

include 'conn.php';
header("Location: cpanel");
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Prepare the data for the new app
    $newAppData = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'category' => $_POST['category'],
        'version' => $_POST['version'],
        'screenshots' => $_POST['screenshots'],
        'icon' => $_POST['icon'],
        'supported_platforms' => $_POST['supported_platforms'],
        'app_url' => $_POST['app_url'],
        'size' => $_POST['size'],
        'package' => $_POST['package'],
        'timestamp' => date('Y-m-d H:i:s'),
        'release_notes' => $_POST['release_notes'],
        'pricing_and_monetization' => $_POST['pricing_and_monetization'],
        'system_requirements' => $_POST['system_requirements'],
        'privacy_policy' => $_POST['privacy_policy']
    ];

    // Insert the new app into the 'apps' table
    $query = "INSERT INTO apps (name, description, category, version, screenshots, icon, supported_platforms, app_url, size, package, timestamp, release_notes, pricing_and_monetization, system_requirements, privacy_policy, uniqueid) VALUES (
        '" . $newAppData['name'] . "',
        '" . $newAppData['description'] . "',
        '" . $newAppData['category'] . "',
        '" . $newAppData['version'] . "',
        '{" . $newAppData['screenshots'] . "}',
        '" . $newAppData['icon'] . "',
        '{" . $newAppData['supported_platforms'] . "}',
        '" . $newAppData['app_url'] . "',
        '" . $newAppData['size'] . "',
        '" . $newAppData['package'] . "',
        '" . $newAppData['timestamp'] . "',
        '" . $newAppData['release_notes'] . "',
        '" . $newAppData['pricing_and_monetization'] . "',
        '" . $newAppData['system_requirements'] . "',
        '" . $newAppData['privacy_policy'] . "',
        '" . uniqid() . "'
    )";

    $result = pg_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
        die("Query failed: " . pg_last_error($conn));
    }

    echo "New app data inserted successfully!";
    header("Location: ./cpanel");

}

pg_close($conn);

?>
