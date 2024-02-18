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

// Retrieve registration data from POST request
$regUsername = $_POST['regUsername'];
$regPassword = $_POST['regPassword'];
$regEmail = $_POST['regEmail'];
$strength = $_POST['strength'];
$agility = $_POST['agility'];
$criticalDamage = $_POST['criticalDamage'];

// Hash the password (for security, use a stronger hashing algorithm in production)
$hashedPassword = password_hash($regPassword, PASSWORD_DEFAULT);

// Insert registration data into the users table
$sql = "INSERT INTO users (username, password, email, strength, agility, critical_damage) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $regUsername, $hashedPassword, $regEmail, $strength, $agility, $criticalDamage);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error during registration: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
