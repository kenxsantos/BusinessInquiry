<?php
$register_errors = array();

if(isset($_POST['new_user'])) {
    // Sanitize input data
    $fname = mysqli_real_escape_string($db, $_POST["first_name"]);
    $lname = mysqli_real_escape_string($db, $_POST["last_name"]);
    $contact = mysqli_real_escape_string($db, $_POST["contact"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);
    $cpassword = mysqli_real_escape_string($db, $_POST["cpassword"]);
    

    // Validate input
    // (Add your validation checks here)
    if (!preg_match("#/^[0-9]+$/#", $contact)) {
        array_push($errors, "Contact must contain only numbers");
    }
    if($password != $cpassword){
        array_push($register_errors, "Passwords do not match");
    }
    if(strlen($password) <= "8"){
        array_push($register_errors, "Password must contain at least 8 characters.");
    }

    // Check if username or email already exists
    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user) {
        if($user["email"] === $email) {
            array_push($login_errors, "Email already exists");
        }
    }

    // Register the user if there are no errors
    if(count($register_errors) == 0) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into database
        $query = "INSERT INTO users (first_name, last_name, contact,  email, password)
                  VALUES('$fname', '$lname', '$contact', '$email', '$hashed_password')";
        mysqli_query($db, $query);

        // Retrieve user_id
        $user_id = mysqli_insert_id($db);

        // Store user data in session
        $_SESSION["fname"] = $fname;
        $_SESSION["email"] = $email;
        $_SESSION["loggedIn"] = true;
        $_SESSION["success"] = "You are now logged in";

        // Redirect to home page
        header("location: home.php");
        exit(); // Ensure script stops execution after redirection
    }
}
?>
