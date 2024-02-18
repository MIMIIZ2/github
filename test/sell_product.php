<?php
// Handle selling a product
if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    // Perform necessary actions (e.g., update database, add funds, etc.)
    // For simplicity, just echoing a success message here
    echo 'Product with ID ' . $productId . ' sold successfully.';
} else {
    echo 'Invalid request.';
}
?>
