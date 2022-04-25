<?php
    // Start PHP session
    session_start();

    // Set session variables upon login
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        setSessionVar($username, $password);
    }

    // Logout the user but do not destroy the session
    if(isset($_POST["logout"])) {
        unsetSessionVar();
    }

    // Logout and destroy the session
    if(isset($_POST["destroy"])) {
        unsetSessionVar();
        session_destroy();
    }

    pageVisitIncrement("page_visited");

    /**
     * Increments when user is logged in and when the logged in page is refreshed
     * 
     * @param string $counter
     */
    function pageVisitIncrement($counter) {
        if(isset($_SESSION[$counter]) && isset($_SESSION["username"])) {
            $_SESSION[$counter] += 1;
        } elseif(!isset($_SESSION["username"])) {
            // Do nothing, this means the user is on the login page
        } else {
            $_SESSION[$counter] = 1;
        }
    }

    /**
     * Set session variables
     * 
     * @param string $username
     * @param string $password
     */
    function setSessionVar($username, $password) {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["user_logged_in"] = true;
    }

    /**
     * Unset session variables
     */
    function unsetSessionVar() {
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        $_SESSION["user_logged_in"] = false;

        if(isset($_POST["destroy"]))
            unset($_SESSION["page_visited"]);
    }

?>

<html>
    <head>
        <title>

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
            <p>You have successfully logged in, <b><?php if(isset($_SESSION['username'])) print $_SESSION['username']; ?></b>!</p>
            <p>Page visits: <?php if(isset($_SESSION['page_visited'])) print $_SESSION['page_visited']; ?></p>

            <input type="submit" name="logout" value="Logout"> 
            <input type="submit" name="destroy" value="Destroy">
        </form>
        <!-- END FORM LOGOUT/HOME -->

        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            var user_logged_in = "<?php if(isset($_SESSION['user_logged_in'])) echo $_SESSION['user_logged_in']; ?>";

            // Check session if user is logged on
            if(user_logged_in != 0 && user_logged_in != null) {
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

                if((username != "SessionAdmin") && (password != "SessionPass")) {
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