<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="styles.css"> 

    <script>
        function validatePasswords() {
            var password = document.getElementById("setpassword").value;
            var confirmPassword = document.getElementById("confirmpassword").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false; // Prevent form submission
            }
            return true; // Proceed with form submission
        }
    </script>
</head>
<body>
    
    <h2>Enter Customer Details</h2>
    <form action="save_customer_details.php" method="POST" onsubmit="return validatePasswords()">
        <input type="text" name="firstname" placeholder="First Name" required><br>
        <input type="text" name="lastname" placeholder="Last Name" required><br>
        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Trans Gender"> Trans Gender
        <input type="radio" name="gender" value="Not to be mentioned"> Not to be mentioned<br>
        <input type="date" name="dob" placeholder="Date of Birth" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="nationality" placeholder="Nationality" required><br>
        <input type="text" name="country" placeholder="Country" required><br>
        <input type="text" name="state" placeholder="State" required><br>
        <input type="text" name="city" placeholder="City" required><br>
        <input type="text" name="pincode" placeholder="Pincode" required><br>
        <textarea name="address" placeholder="Address" required></textarea><br>
        <input type="password" id="setpassword" name="setpassword" placeholder="Set Password" required><br>
        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
