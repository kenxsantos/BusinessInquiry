<!DOCTYPE html>
<html>

<head>
    <?php include "imports.php" ?>
</head>

<body>
    <?php include "navbar.php"; ?>
    <header>
        <?php
        if (!isset($_SESSION["email"])) {
            echo "
            <h1>Welcome to Our Website</h1>
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
                <h1>Welcome to our website, $fname</h1>
                ";
            }
        }
?>

        <p>"Awaken your senses with every sip: where passion meets perfection in every cup."</p>
    </header>
        <!-- <div class="coffee_bg ">
            <img src="http://localhost:80/BusinessInquiry/images/coffee3.png" alt="" srcset="">
        </div> -->
    <section class="features">
        <div>
            <img src="http://localhost:80/BusinessInquiry/images/coffee1.jpg" alt="" srcset="">
        </div>
        <div>
            <img src="http://localhost:80/BusinessInquiry/images/coffee2.jpg" alt="" srcset="">
        </div>
        <div>
            <img src="http://localhost:80/BusinessInquiry/images/coffee3.jpg" alt="" srcset="">
        </div>
    </section>


</body>

</html>