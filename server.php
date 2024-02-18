<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_GET['action'] === 'register') {
        $regUsername = $_POST['username'];
        $regPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $regDob = $_POST['dob'];
        $regEmail = $_POST['email'];

        // Insert user data into the database
        $sql = "INSERT INTO users (username, password, dob, email) VALUES ('$regUsername', '$regPassword', '$regDob', '$regEmail')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(['message' => 'Registration successful.']);
        } else {
            echo json_encode(['message' => 'Error registering user: ' . $conn->error]);
        }
    } elseif ($_GET['action'] === 'login') {
        $loginUsername = $_POST['username'];
        $loginPassword = $_POST['password'];

        // Retrieve user data from the database
        $sql = "SELECT * FROM users WHERE username='$loginUsername'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($loginPassword, $row['password'])) {
                echo json_encode(['message' => 'Login successful.']);
            } else {
                echo json_encode(['message' => 'Incorrect password.']);
            }
        } else {
            echo json_encode(['message' => 'User not found.']);
        }
    }
}

$conn->close();
?>
