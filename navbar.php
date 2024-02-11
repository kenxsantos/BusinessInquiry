<?php
    session_start();
    include 'config/config.php';
    include "server/login_server.php";
    include "server/register_server.php";
    include "server/inquiries_server.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
</head>
<body>
    <nav>
        <div>
            <a href="home.php">
                <label class="logo">Caffeine Cove</label>
            </a>
        </div>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="inquiry.php">Inquiry</a></li>
        </ul>
        <?php
        if (!isset($_SESSION["email"])) {
            echo "
            <div class='dropdown'>
                <a href='register.php'>
                    <button>Profile</button>
                </a>
                <div class='dropdown-options'>
                    <a href='login.php'>Sign In</a>
                    <a href='register.php'>Register</a>
                </div>
            </div>
            ";
        } else {
            $email = $_SESSION["email"];
            $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
            $result = mysqli_query($db, $query);
        
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $fname = $row["first_name"];
                $email = $row["email"];
        
                echo "
                <div class='dropdown'>
                    <button>$fname</button>
                    <div class='dropdown-options'>
                        <a href='logout.php'>Log Out</a>
                    </div>
                </div>
                ";
            }
        }
?>
       
    </nav>
</body>

</html>