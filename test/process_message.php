<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the message from the POST data
    $message = $_POST["message"];

    // You can implement additional logic here, such as storing the messages in a database

    // For simplicity, just echoing the message back for demonstration purposes
    echo "Server: " . $message;
} else {
    // Handle invalid requests
    echo "Invalid Request";
}
?>
