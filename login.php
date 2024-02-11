<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <?php include "imports.php" ?>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="main-div">
        <div class="child">
            <img  src="http://localhost:80/BusinessInquiry/images/login.png" alt="" srcset="">
        </div>
        <div class="child">
            <div class="inquiry-form">
                <form action="login.php" method="POST">
                    <h1>Log In</h1>
                    <p>Enter your email and password</p>
                    <?php include "errors/login_errors.php"; ?>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <input type="submit" value="Submit" name="login_user">
                    <p>
                        Don't have an account? <a href="http://localhost:80/BusinessInquiry/register.php">Sign Up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>