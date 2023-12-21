<!DOCTYPE html>
<html>
<head>
    <title>Available Services</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <h2>Available Bike Services</h2>

    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = ""; // Assuming no password is set
    $dbname = "bike_service_application";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch services from the database
    $sql = "SELECT * FROM Services";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display services in a form for booking
        echo "<form action='book_service.php' method='POST'>";
        while ($row = $result->fetch_assoc()) {
            echo "<input type='checkbox' name='services[]' value='" . $row["service_id"] . "'>";
            echo $row["service_name"] . " - Description: " . $row["description"] . " - Price: $" . $row["price"] . "<br>";
        }
        echo "<input type='submit' value='Book Selected Services'>";
        echo "</form>";
    } else {
        echo "No services available.";
    }

    $conn->close();
    ?>

</body>
</html>
