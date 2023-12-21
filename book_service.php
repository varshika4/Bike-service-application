<!DOCTYPE html>
<html>
<head>
    <title>Book Service</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function toggleCardDetails() {
            var cardDetails = document.getElementById("card-details");
            var cashOnDelivery = document.getElementById("cash_on_delivery");

            if (cashOnDelivery.checked) {
                cardDetails.style.display = "none";
                document.getElementById("card_number").removeAttribute("required");
                document.getElementById("expiry_date").removeAttribute("required");
                document.getElementById("cvv").removeAttribute("required");
            } else {
                cardDetails.style.display = "block";
                document.getElementById("card_number").setAttribute("required", "required");
                document.getElementById("expiry_date").setAttribute("required", "required");
                document.getElementById("cvv").setAttribute("required", "required");
            }
        }
    </script>
</head>
<body>
    <h2>Book Selected Services</h2>

    <?php
    // PHP code here...
    ?>

    <h3>Enter Payment Details</h3>
    <form action="confirm_booking.php" method="POST">
        <div id="card-details">
            Card Number: <input type="text" id="card_number" name="card_number" required><br>
            Expiry Date: <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" required><br>
            CVV: <input type="text" id="cvv" name="cvv" required><br>
        </div>

        <h3>Pickup/Delivery Details</h3>
        <input type="radio" id="pickup" name="pickup_delivery" value="pickup">
        <label for="pickup">Pickup</label><br>
        <input type="radio" id="delivery" name="pickup_delivery" value="delivery">
        <label for="delivery">Delivery</label><br>
        Address:<br>
        <textarea name="address" rows="4" cols="50" required></textarea><br>

        <input type="checkbox" id="cash_on_delivery" name="cash_on_delivery" value="cash_on_delivery" onchange="toggleCardDetails()">
        <label for="cash_on_delivery">Cash on Delivery</label><br>

    </form>
    <a href = "customer_updates.php "><input type="submit" value="Place Order"></a>

</body>
</html>
