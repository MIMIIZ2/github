$(document).ready(function() {
    // Load player's inventory on page load
    loadInventory();

    // Example: Add items to the inventory
    addItem("Sword", 1, "sword_image.jpg");
    addItem("Health Potion", 5, "potion_image.jpg");

    // Open inventory button click event
    $("#open-inventory-button").on("click", function() {
        toggleInventory();
    });
});

function loadInventory() {
    // Use AJAX to fetch the player's inventory from the server
    $.ajax({
        type: "GET",
        url: "get_inventory.php", // Create a PHP file (get_inventory.php) to handle inventory retrieval
        success: function(response) {
            // Update the item list display or handle the response accordingly
            $("#item-list").html(response);
        }
    });
}

function toggleInventory() {
    // Toggle the visibility of the inventory
    $("#inventory").toggle();
}

function addItem(itemName, quantity, imageSrc) {
    // Use AJAX to add an item to the player's inventory
    $.ajax({
        type: "POST",
        url: "add_item.php", // Create a PHP file (add_item.php) to handle item addition
        data: { itemName: itemName, quantity: quantity, imageSrc: imageSrc },
        success: function(response) {
            // Reload the inventory after adding an item
            loadInventory();
        }
    });
}
