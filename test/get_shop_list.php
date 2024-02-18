function buy() {
    // Implement buy functionality using AJAX
    $.ajax({
        type: "POST",
        url: "buy.php", // Create a PHP file (buy.php) to handle the buy logic
        success: function(response) {
            // Update the shop display or handle the response accordingly
            $("#shop").html(response);
        }
    });
}

function sell() {
    // Implement sell functionality using AJAX
    $.ajax({
        type: "POST",
        url: "sell.php", // Create a PHP file (sell.php) to handle the sell logic
        success: function(response) {
            // Update the shop display or handle the response accordingly
            $("#shop").html(response);
        }
    });
}

function exitShop() {
    // Implement exit functionality using AJAX
    $.ajax({
        type: "POST",
        url: "exit.php", // Create a PHP file (exit.php) to handle the exit logic
        success: function(response) {
            // Update the shop display or handle the response accordingly
            $("#shop").html(response);
        }
    });
}
