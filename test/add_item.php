<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get item details from the POST data
    $itemName = $_POST["itemName"];
    $quantity = $_POST["quantity"];

    // Add the item to the player's inventory in the database or session (this is a simplified example)

    // For demonstration purposes, just acknowledge the addition
    echo "Item added successfully!";
} else {
    // Handle invalid requests
    echo "Invalid Request";
}
?>
