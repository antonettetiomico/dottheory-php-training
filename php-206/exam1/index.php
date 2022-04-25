<?php

    // Destroy cookies upon logout
    if (isset($_POST["logout"])) {
        setcookie("username", "");
        setcookie("password", "");
        setcookie("user_logged_in", false);
    }

    // Set cookies upon login
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        setcookie("username", $username);
        setcookie("password", $password);
        setcookie("user_logged_in", true);
    }

?>

<html>
    <head>
        <title>
            PHP 206 - Practical Exam
        </title>
    </head>

    <body>
        <!-- FORM LOGIN -->
        <form method="POST" name="loginForm">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="login" value="Login">
        </form>
        <!-- END FORM LOGIN -->

        <!-- FORM LOGOUT/HOME -->
        <form method="POST" name="homeForm">
            <p>You have successfully logged in.</p><br>

            <input type="submit" name="logout" value="Logout">
        </form>
        <!-- END FORM LOGOUT/HOME -->

        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            // Check cookie if user is logged in
            if((document.cookie.indexOf('user_logged_in=1')) != -1) {
                $(homeForm).show();
                $(loginForm).hide();
            } else {
                $(homeForm).hide();
                $(loginForm).show();
            }

            // loginForm Submit
            $(loginForm).submit(function() {
                var username = $("#username").val();
                var password = $("#password").val();

                if((username != "CookieAdmin") && (password != "CookiePass")) {
                    alert("Invalid credentials. Please try again.")
                    this.reset();
                    $("#username").focus();
                    return false;
                }
            });
        </script>
        <!-- END SCRIPTS -->
    </body>
</html>