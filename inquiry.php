<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "imports.php" ?>
</head>
<body>
    <div class="inquiry-form">        
        <form action="">
            <div>
                <label for="fname">Personal Information</label>
                <input type="text" id="fname" name="firstname" placeholder="First Name">
                <input type="text" id="lname" name="lastname" placeholder="Last Name">   
            </div>
            <div class="flex">
                <input type="number" id="lname" name="lastname" placeholder="Phone No" pattern="[0-9]{3}-[0-9]{2}-[0-9]>
                <input type="email" id="lname" name="lastname" placeholder="Email">
            </div>
           
            <div>
                <label for="lname">Address</label>
                <input type="text" id="lname" name="lastname" placeholder="Street Address">
            </div>
            <div class="flex">
                <input type="text" id="lname" name="lastname" placeholder="Postal Code">
                <input type="text" id="lname" name="lastname" placeholder="City">
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
            <label for="tarea">Message</label>
            <textarea id="tarea" name="w3review" rows="5" placeholder="Write your inquiries">

</textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>