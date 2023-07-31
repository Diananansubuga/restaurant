<?php
$connect=new mysqli('127.0.0.1','root','','menu2_db');
// Database configuration
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "menu2_db";

// Connect to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Prepare and execute SQL insert statements for each selected item
  if (isset($_POST["item"])) {
    $selectedItems = $_POST["item"];
    foreach ($selectedItems as $item) {
      // Retrieve the item's name and price from the menu_items table
      $query = "SELECT item_name, price FROM menu_items WHERE id = ?";
      $stmt = $conn->prepare($query);
      $stmt->bind_param("i", $item);
      $stmt->execute();
      $stmt->bind_result($item_name, $price);

      // Insert the selected item and its price into the orders table
      while ($stmt->fetch()) {
        $insertQuery = "INSERT INTO orders (item_name, price) VALUES (?, ?)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bind_param("sd", $item_name, $price);
        $insertStmt->execute();
      }

      // Close the statement
      $stmt->close();
    }
  }
}

// Calculate the total bill by summing the prices from the orders table
$totalQuery = "SELECT SUM(price) AS total FROM orders";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalBill = $totalRow["total"];

// Display the total bill message
echo "<p>Total bill: $" . number_format($totalBill, 2) . "</p>";

// Close the database connection
$conn->close();
?>
