<?php
    $inquiries_errors = array();

if(isset($_POST['user_inquiries'])) {
    // Sanitize input data
    $fname = mysqli_real_escape_string($db, $_POST["first_name"]);
    $lname = mysqli_real_escape_string($db, $_POST["last_name"]);
    $contact = mysqli_real_escape_string($db, $_POST["contact"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $address = mysqli_real_escape_string($db, $_POST["address"]);
    $postal = mysqli_real_escape_string($db, $_POST["postal"]);
    $city = mysqli_real_escape_string($db, $_POST["city"]);
    $country = mysqli_real_escape_string($db, $_POST["country"]);
    $message = mysqli_real_escape_string($db, $_POST["message"]);
    

    // Validate input
    // (Add your validation checks here)
    if (!preg_match("/^[0-9]+$/", $contact)) {
        array_push($inquiries_errors, "Contact must contain only numbers");
    }

    // Register the user if there are no errors
    if(count($inquiries_errors) == 0) {
        $query = "INSERT INTO inquiries (first_name, last_name, contact,  email, address, postal,  city, country, message)
                  VALUES('$fname', '$lname', '$contact', '$email', '$address', '$postal', '$city', '$country', '$message')";
        mysqli_query($db, $query);

        // Redirect to home page
        header("location: sent_inquiry.php");
        exit(); // Ensure script stops execution after redirection
    }
}
?>
