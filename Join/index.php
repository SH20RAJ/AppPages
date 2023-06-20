<?php
session_start();

$client_id = '27588a37c213e8f94fd0';
$callback_url = 'https://appspages.sh20raj.repl.co/Join/callback.php';

$auth_url = 'https://github.com/login/oauth/authorize' .
  '?client_id=' . $client_id .
  '&redirect_uri=' . urlencode($callback_url) .
  '&scope=user';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login with GitHub</title>
</head>
<body>
    <h2>Login with GitHub</h2>
    <p>Click the button below to login with your GitHub account:</p>
    <a href="<?php echo $auth_url; ?>">
        <img src="github-login-button.png" alt="Login with GitHub" width="200" height="40">
    </a>
</body>
</html>
