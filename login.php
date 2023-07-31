<?php
$connect=new mysqli('127.0.0.1','root','','user_accounts');
// Database configuration
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "user_accounts";

// Connect to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $usernameOrEmail = $_POST["username_or_email"];
  $password = $_POST["password"];

  // Prepare and execute SQL select statement to retrieve the user's data
  $query = "SELECT id, username, email, password FROM user_accounts WHERE username = ? OR email = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ss", $usernameOrEmail, $usernameOrEmail);
  $stmt->execute();
  $stmt->bind_result($id, $username, $email, $hashed_password);

  // Verify the password
  if ($stmt->fetch() && password_verify($password, $hashed_password)) {
    // Successful login
    echo "Welcome, $username!";
    // You can redirect to the user's dashboard or home page after successful login
    // header("Location: dashboard.php");
  } else {
    // Invalid login credentials
    echo "Invalid username/email or password.";
  }

  // Close the statement
  $stmt->close();
}

// Close the database connection
$conn->close();
?>
