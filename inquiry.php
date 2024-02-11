<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry</title>
    <?php include "imports.php" ?>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="main-div">
        <div class="child">
            <img id="inquire" src="http://localhost:80/BusinessInquiry/images/inquire.jpg" alt="" srcset="" >
        </div>
        <div class="child">
            <div class="inquiry-form">
                <form action="inquiry.php" method="POST">
                    <label for="fname">Personal Information</label>
                    <div class="flex">
                        <input type="text" id="fname" name="first_name" placeholder="First Name" required>
                        <input type="text" id="lname" name="last_name" placeholder="Last Name" required>
                    </div>
                    <div class="flex">
                        <input type="tel" id="contact" name="contact" placeholder="Phone No" required>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <?php include "errors/inquiries_errors.php"; ?>
                    <div>
                        <label for="lname">Address</label>
                        <input type="text" id="address" name="address" placeholder="Street Address" required>
                    </div>
                    <div class="flex">
                        <input type="text" id="postal" name="postal" placeholder="Postal Code" required>
                        <input type="text" id="city" name="city" placeholder="City" required>
                    </div>
                    <div>
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="Philippines">Philippines</option>
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>

                    </div>
                    <div>
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" col="5"
                            placeholder="Write your inquiries" required></textarea>
                    </div>
                    <input type="submit" value="Submit" name="user_inquiries">
                </form>
            </div>
        </div>
    </div>
</body>

</html>