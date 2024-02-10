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
            <img src="http://localhost:80/BusinessInquiry/images/bg2.png" alt="" srcset="" >
        </div>
        <div class="child">
            <div class="inquiry-form">
                <form action="">
                <label for="fname">Personal Information</label>
                    <div class="flex">
                        <input type="text" id="fname" name="firstname" placeholder="First Name">
                        <input type="text" id="lname" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="flex">
                        <input type="tel" id="contact" name="contact" placeholder="Phone No" pattern="[0-9]{3}-[0-9]{2}-[0-9]">
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>

                    <div>
                        <label for="lname">Address</label>
                        <input type="text" id="address" name="address" placeholder="Street Address">
                    </div>
                    <div class="flex">
                        <input type="text" id="postal" name="postal" placeholder="Postal Code">
                        <input type="text" id="city" name="city" placeholder="City">
                    </div>
                    <div>
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Philippines</option>
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>

                    </div>
                    <div>
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Write your inquiries">
                        </textarea>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>