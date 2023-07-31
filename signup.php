
<?php
$connect=new mysqli('localhost','root','','user_accounts');
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $username = $_POST["username"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $password = $_POST["password"];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

  // Prepare and execute SQL insert statement
  $insertQuery = "INSERT INTO user_accounts (username, email, contact, password) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($insertQuery);
  $stmt->bind_param("ssss", $username, $email, $contact, $hashed_password);
  $stmt->execute();

  // Close the statement
  $stmt->close();

  // Display success message or redirect to login page
  echo "Signup successful! Welcome, $username!";
  // You can redirect to the login page after successful signup
  // header("Location: login.html");
}

// Close the database connection
$conn->close();
?>
