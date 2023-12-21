<!DOCTYPE html>
<html>
<head>
    <title>Booking Updates</title>
    <link rel="stylesheet" href="styles.css"> 

</head>
<body>
    <h2>Booking Updates</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Enter your Email: <input type="email" name="customer_email" required><br>
        <input type="submit" value="Check Updates">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customer_email = $_POST['customer_email'];

        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbname = "bike_service_application";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch booking updates based on customer email
        $sql = "SELECT * FROM BookedOrders WHERE customer_email='$customer_email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display booking updates for the customer
            echo "<h3>Booking Updates for $customer_email:</h3>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>Order ID: " . $row["order_id"] . " - Service: " . $row["service_name"] . " - Status: " . $row["status"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No updates found for $customer_email.";
        }

        $conn->close();
    }
    ?>

</body>
</html>
