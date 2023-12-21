<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"> 

</head>
<body>
    <h2>Login</h2>
    <form action="authenticate_customer.php" method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login"> 

    </form>

    <p>New Customer? <a href="customer_registration.php">Register here</a></p>
</body>
</html>
