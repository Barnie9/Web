<html>
<head>
    <link rel = "stylesheet" type ="text/css" href = "signup.css">
    <title>FLOWER LAB</title>
</head>
    <body>
    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            // Redirect to user dashboard page
            header("Location: index.html");
        }
    } else {
?>
        <div class = "container1"></div>
        <!--register form -->
        <div class="center">
            <h1>Register</h1>
            <form method="post">
                 <div class="txt_field">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>Username</label>
                </div>

                <div class="txt_field">
                    <input type="text" name="email" required>
                    <span></span>
                    <label>Email address</label>
                </div>

                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>

                    <input type="submit" value="Sign up">
                <div class="signup_link">
                   <a href="login.php">I have an account!</a>
                </div>
            </form>
            <?php
    }
?>
        </div>
    </body>

</html>
