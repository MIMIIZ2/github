<?php
// Get the player's inventory from a database or session (this is a simplified example)
$inventory = [
    ['name' => 'Sword', 'quantity' => 1],
    ['name' => 'Health Potion', 'quantity' => 5]
];

// Output the inventory as HTML slots
foreach ($inventory as $item) {
    echo "<div class='inventory-slot'>{$item['name']}: {$item['quantity']}</div>";
}
?>
