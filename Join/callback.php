<?php
session_start();

$client_id = '27588a37c213e8f94fd0';
$client_secret = '2390245419edc75d80b64d39764ea92ef0f2611b';
$callback_url = 'https://appspages.sh20raj.repl.co/Join/callback.php';

if (isset($_GET['code'])) {
    $token_url = 'https://github.com/login/oauth/access_token';
    $params = array(
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $_GET['code'],
        'redirect_uri' => $callback_url
    );

    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($params),
        ),
    );

    $context = stream_context_create($options);
    $response = file_get_contents($token_url, false, $context);
    parse_str($response, $data);

    if (isset($data['access_token'])) {
        $_SESSION['access_token'] = $data['access_token'];
        include "../Join/GitHubOAuth.php";
        $_SESSION['user'] = getAuthenticatedUser($_SESSION['access_token']);
        header('Location: ../cpanel');
        exit;
    } else {
        die('Failed to retrieve access token from GitHub.');
    }
} else {
    die('Authorization code not found.');
}
?>
