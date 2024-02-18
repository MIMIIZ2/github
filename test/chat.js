function sendMessage() {
    var message = $("#message-input").val();

    if (message.trim() !== "") {
        // Use AJAX to send the message to the server
        $.ajax({
            type: "POST",
            url: "process_message.php", // Create a PHP file (process_message.php) to handle the message
            data: { message: message },
            success: function(response) {
                // Update the chat box display or handle the response accordingly
                $("#chat-box").append("<p>You: " + message + "</p>");
                $("#message-input").val(""); // Clear the input field after sending
            }
        });
    }
}
