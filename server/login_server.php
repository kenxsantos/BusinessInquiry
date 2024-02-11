<?php
$login_errors = array();

 if(isset($_POST["login_user"])){
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if(count($login_errors) == 0){
        // Hash the password for comparison
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Fetch user data from the database
        $query = "SELECT * FROM users WHERE email='$email'";
        $results = mysqli_query($db, $query);

        if(mysqli_num_rows($results) == 1){
            $user = mysqli_fetch_assoc($results);

            // Verify password
            if(password_verify($password, $user['password'])){
                // Password is correct, set session variables
                $_SESSION["fname"] = $user['first_name'];
                $_SESSION["email"] = $user['email'];
                $_SESSION["loggedIn"] = true;
                $_SESSION["success"] = "You are now logged in.";
                header("location: home.php");
                exit();
            } else {
                array_push($login_errors, "Invalid Credentials");
            }
        } else {
            array_push($login_errors, "User not found");
        }
    }
    
}
?>