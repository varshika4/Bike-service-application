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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM CustomerDetails WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['setpassword'];

        // Verify the password
        if (password_verify($password, $stored_password)) {
            header("Location: services_page.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password'); window.location.href='customer_page.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Invalid email or password'); window.location.href='customer_page.php';</script>";
        exit();
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>
