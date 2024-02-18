<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve login data from POST request
$loginUsername = $_POST['loginUsername'];
$loginPassword = $_POST['loginPassword'];

// Retrieve hashed password from the database based on the provided username
$sql = "SELECT id, username, password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $loginUsername);
$stmt->execute();
$stmt->bind_result($userId, $dbUsername, $hashedPassword);

if ($stmt->fetch() && password_verify($loginPassword, $hashedPassword)) {
    echo "Login successful! Welcome, $dbUsername (ID: $userId)";
} else {
    echo "Invalid username or password.";
}

// Close the database connection
$stmt->close();
$conn->close();
?>
