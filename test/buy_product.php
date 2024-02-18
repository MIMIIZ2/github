<?php
// Handle buying a product
if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    // Perform necessary actions (e.g., update database, deduct funds, etc.)
    // For simplicity, just echoing a success message here
    echo 'Product with ID ' . $productId . ' bought successfully.';
} else {
    echo 'Invalid request.';
}
?>
