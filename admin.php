<?php
session_start(); // Start the session
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['admns'];
    $password = $_POST['pass'];

    error_log("Debug: Received POST request with username: $username");

    $query = "SELECT * FROM login WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        error_log("Error: Failed to prepare statement - " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        error_log("Debug: Login successful for username: $username");
        $_SESSION['admin_logged_in'] = true; // Set session variable
        header("Location: dashboard.php");
        exit();
    } else {
        error_log("Debug: Login failed for username: $username");
        $error = "Wrong Inputs!";
    }
}
?>
<html>
  <head>
    <title>Study Center Management</title>
    <link rel="stylesheet" href="cover.css">
    <style>
      .button:hover {
           background-color: #4CAF50;
          color: white;
      }
    </style>
  </head>
  <body id="body1">
    <div class="topnav">
      <a href="index.php">Student Study Center Management</a>
      <a href="reg.php">Desk Registration</a>
      <a class="active">Admin Login</a>
      <a href="contact.php">Contact</a>
    </div>
    
    <div class="login-box">
      <h2>Login</h2>
      <form method="POST" action="">
        <div class="user-box">
          <input type="text" name="admns" id="admns" required>
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="pass" id="pass" required>
          <label>Password</label>
        </div>
        <button type="submit" style="background-color: #03f45f; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 4px;">LOGIN</button>
      </form>
      <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
    </div>

    <div class="footer">
      <p>&copy Copyrights Reserved</p>
    </div>
  </body>
</html>