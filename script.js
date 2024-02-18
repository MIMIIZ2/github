$(document).ready(function () {
    // Your existing JavaScript code

    // Register button click event
    $('#registerButton').on('click', function () {
        // Get user registration data
        var regUsername = $('#regUsername').val();
        var regPassword = $('#regPassword').val();
        var regDob = $('#regDob').val();
        var regEmail = $('#regEmail').val();

        // Send registration data to the server
        $.ajax({
            url: 'server.php?action=register',
            method: 'POST',
            data: {
                username: regUsername,
                password: regPassword,
                dob: regDob,
                email: regEmail
            },
            success: function (response) {
                if (response && response.message) {
                    alert(response.message);
                } else {
                    alert('Unexpected server response. Please check the server-side code.');
                }
            },
            error: function () {
                alert('Error registering user.');
            }
        });
    });

    // Login button click event
    $('#loginButton').on('click', function () {
        // Get login data
        var loginUsername = $('#loginUsername').val();
        var loginPassword = $('#loginPassword').val();

        // Send login data to the server
        $.ajax({
            url: 'server.php?action=login',
            method: 'POST',
            data: {
                username: loginUsername,
                password: loginPassword
            },
            success: function (response) {
                if (response && response.message) {
                    alert(response.message);
                } else {
                    alert('Unexpected server response. Please check the server-side code.');
                }
            },
            error: function () {
                alert('Error logging in.');
            }
        });
    });

    // Your existing JavaScript code
});
