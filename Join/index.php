<!DOCTYPE html>
<html>
<head>
  <title>AppsPages - User Login and Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css">
</head>
<body>
  <div class="navbar">
    <div class="container">
      <h3 class="navbar-brand">AppsPages - User Login and Signup</h3>
    </div>
  </div>

  <div class="container header-wrapper">
    <h2>User Signup</h2>
    <div id="signup-error" class="error"></div>
    <div id="signup-success" class="success"></div>
    <form id="signup-form">
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
    <div id="login-error" class="error"></div>
    <form id="login-form">
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

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Signup form submission
      $("#signup-form").submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.post("api.php", formData, function(response) {
          if (response.success) {
            $("#signup-success").html(response.message).show();
            $("#signup-error").hide();
          } else {
            $("#signup-error").html(response.message).show();
            $("#signup-success").hide();
          }
        }, "json");
      });

      // Login form submission
      $("#login-form").submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.post("api.php", formData, function(response) {
          if (response.success) {
            window.location.href = "dashboard.php"; // Replace with your dashboard page URL
          } else {
            $("#login-error").html(response.message).show();
          }
        }, "json");
      });
    });
  </script>
</body>
</html>
