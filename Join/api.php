<?php
// Start output buffering
ob_start();

// Include the connection file
include "../conn.php";

// Initialize the response array
$response = array();

// Check the connection
if ($conn->connect_error) {
    $response["success"] = false;
    $response["message"] = "Connection failed: " . $conn->connect_error;
} else {
    // Process the signup form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Check if the username already exists
        $checkQuery = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            $response["success"] = false;
            $response["message"] = "Username already exists. Please choose a different username.";
        } else {
            // Insert user data into the database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                $response["success"] = true;
                $response["message"] = "Registration successful!";
            } else {
                $response["success"] = false;
                $response["message"] = "Error: " . $sql . "<br>" . $conn->error;
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
                $response["success"] = true;
                $response["message"] = "Login successful!";
            } else {
                // Password is incorrect
                $response["success"] = false;
                $response["message"] = "Invalid username or password.";
            }
        } else {
            // User does not exist
            $response["success"] = false;
            $response["message"] = "Invalid username or password.";
        }
    }

    // Close the database connection
    $conn->close();
}

// Clean (discard) the output buffer
ob_end_clean();

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
