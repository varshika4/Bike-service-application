<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['user_type'] === 'customer') {
        header("Location: customer_page.php");
        exit();
    } elseif ($_POST['user_type'] === 'representative') {
        header("Location: representative_page.php");
        exit();
    } else {
        // Handle other cases or errors
    }
} else {
    // Handle other HTTP methods
}
?>
