<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php include "imports.php" ?>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="main-div">
        <div class="child">
            <img src="http://localhost:80/BusinessInquiry/images/register.jpg" alt="" srcset="">
        </div>
        <div class="child">
            <div class="inquiry-form">
                <form action="register.php" method="POST">
                    <h1>Register</h1>
                    <p>Kindly fill this form to register</p>
                    <?php include "errors/register_errors.php"; ?>
                    <div class="flex">
                        <input type="text" id="fname" name="first_name" placeholder="First Name" required>
                        <input type="text" id="lname" name="last_name" placeholder="Last Name" required>
                    </div>
                    <div class="flex">
                        <input type="tel" id="contact" name="contact" placeholder="Phone No" required>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
                    </div>
                    <input type="submit" value="Submit" name="new_user">
                    <p>
                        Already a member? <a href="http://localhost:80/BusinessInquiry/login.php">Sign in</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>