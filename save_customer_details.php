<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bike_service_application";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $nationality = $_POST['nationality'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $address = $_POST['address'];
    $setpassword = $_POST['setpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if ($setpassword !== $confirmpassword) {
        echo "<script>alert('Passwords do not match');window.location.href='customer_registration.php';</script>";
        exit();
    }

    $encrypted_password = password_hash($setpassword, PASSWORD_DEFAULT);

    $sql = "INSERT INTO CustomerDetails (firstname, lastname, gender, dob, email, nationality, country, state, city, pincode, address, setpassword)
    VALUES ('$firstname', '$lastname', '$gender', '$dob', '$email', '$nationality', '$country', '$state', '$city', '$pincode', '$address', '$encrypted_password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: customer_page.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>
