<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration and Login</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div id="registrationForm">
        <h2>Register</h2>
        <label for="regUsername">Username:</label>
        <input type="text" id="regUsername" name="regUsername" required>
        <br>
        <label for="regPassword">Password:</label>
        <input type="password" id="regPassword" name="regPassword" required>
        <br>
        <label for="regEmail">Email:</label>
        <input type="email" id="regEmail" name="regEmail" required>
        <br>
        <label for="strength">Strength:</label>
        <input type="text" id="strength" name="strength" required>
        <br>
        <label for="agility">Agility:</label>
        <input type="text" id="agility" name="agility" required>
        <br>
        <label for="criticalDamage">Critical Damage:</label>
        <input type="text" id="criticalDamage" name="criticalDamage" required>
        <br>
        <button id="registerButton">Register</button>
        <p id="registrationResult"></p>
    </div>

    <div id="loginForm">
        <h2>Login</h2>
        <label for="loginUsername">Username:</label>
        <input type="text" id="loginUsername" name="loginUsername" required>
        <br>
        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" name="loginPassword" required>
        <br>
        <button id="loginButton">Login</button>
        <p id="loginResult"></p>
    </div>

    <script src="script.js"></script>
    <script>
        $(document).ready(function() {
            // Registration AJAX
            $("#registerButton").click(function() {
                var regUsername = $("#regUsername").val();
                var regPassword = $("#regPassword").val();
                var regEmail = $("#regEmail").val();
                var strength = $("#strength").val();
                var agility = $("#agility").val();
                var criticalDamage = $("#criticalDamage").val();

                $.ajax({
                    type: "POST",
                    url: "register.php",
                    data: {
                        regUsername: regUsername,
                        regPassword: regPassword,
                        regEmail: regEmail,
                        strength: strength,
                        agility: agility,
                        criticalDamage: criticalDamage
                    },
                    success: function(result) {
                        $("#registrationResult").html(result);
                    }
                });
            });

            // Login AJAX
            $("#loginButton").click(function() {
                var loginUsername = $("#loginUsername").val();
                var loginPassword = $("#loginPassword").val();

                $.ajax({
                    type: "POST",
                    url: "login.php",
                    data: {
                        loginUsername: loginUsername,
                        loginPassword: loginPassword
                    },
                    success: function(result) {
                        $("#loginResult").html(result);
                    }
                });
            });
        });
    </script>
</body>
</html>
