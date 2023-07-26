<?php
ob_start(); // Start output buffering

include "../conn.php";
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the username already exists
    $checkQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        $signupError = "Username already exists. Please choose a different username.";
    } else {
        // Insert user data into the database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $signupSuccess = "Registration successful!";
        } else {
            $signupError = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Process the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Retrieve user data from the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row["password"];

        // Verify the password
        if ($password === $storedPassword) {
            // Password is correct, proceed with login
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["uploader_id"] = $row["user_id"];
            // Redirect the user to a dashboard or home page
            header("Location: ../cpanel/");
            exit(); // Terminate the script to prevent further execution
        } else {
            // Password is incorrect
            $loginError = "Invalid username or password.";
        }
    } else {
        // User does not exist
        $loginError = "Invalid username or password.";
    }
}

// Close the database connection
$conn->close();

ob_end_flush(); // Flush the output buffer
?><!DOCTYPE html>
<html>
<head>
  <title>AppsPages - User Login and Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .navbar {
      background-color: #3f51b5;
      color: #fff;
      padding: 10px;
    }

    .navbar h3 {
      margin: 0;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
      color: #777;
    }

    /* Rest of the existing CSS remains unchanged */

    /* Additional Styling */
    .navbar-brand {
      font-size: 24px;
      font-weight: bold;
    }

    .header-wrapper {
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div class="container">
      <h3 class="navbar-brand">AppsPages - User Login and Signup</h3>
    </div>
  </div>

  <div class="container header-wrapper">
    <h2>User Signup</h2>
    <?php if (isset($signupError)) { ?>
      <p class="error"><?php echo $signupError; ?></p>
    <?php } ?>
    <?php if (isset($signupSuccess)) { ?>
      <p class="success"><?php echo $signupSuccess; ?></p>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <input type="hidden" name="signup" value="1">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Sign Up</button>
      </div>
    </form>

    <hr>

    <h2>User Login</h2>
    <?php if (isset($loginError)) { ?>
      <p class="error"><?php echo $loginError; ?></p>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <input type="hidden" name="login" value="1">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Log In</button>
      </div>
    </form>
  </div>

  <div class="footer">
    <p>Form created using Bootstrap and designed by OpenAI ChatGPT</p>
  </div>
</body>
</html>

