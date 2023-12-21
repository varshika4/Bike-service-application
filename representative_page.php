<!DOCTYPE html>
<html>
<head>
    <title>Representative Page</title>
    <link rel="stylesheet" href="styles.css"> 

</head>
<body>
    <h2>Booked Orders</h2>

    <?php
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

    // Fetch booked orders and customer details from the database
    $sql = "SELECT * FROM BookedOrders INNER JOIN CustomerDetails ON BookedOrders.customer_email = CustomerDetails.email";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display booked orders with customer details
        echo "<table border='1'>";
        echo "<tr><th>Order ID</th><th>Customer Name</th><th>Email</th><th>Phone Number</th><th>Service</th><th>Status</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["order_id"] . "</td>";
            echo "<td>" . $row["firstname"] . " " . $row["lastname"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone_number"] . "</td>";
            echo "<td>" . $row["service_name"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No booked orders.";
    }

    $conn->close();
    ?>

    <h3>Update Order Status</h3>
    <form action="update_status.php" method="POST">
        Order ID: <input type="text" name="order_id" required><br>
        Status:
        <select name="status" required>
            <option value="Pending">Pending</option>
            <option value="Ready for Delivery">Ready for Delivery</option>
            <option value="Completed">Completed</option>
        </select><br>
    </form>
    <a href="user_selection.php "><input type="submit" value="Update Status"> </a>


</body>
</html>
