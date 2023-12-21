<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Selection</title>
    <link rel="stylesheet" href="styles.css"> 

</head>
<body>

<div class="container mt-5">
    <h2>Are you a customer or a bike service representative?</h2>
    <form action="redirect.php" method="POST">
        <input type="radio" name="user_type" value="customer"> Customer<br>
        <input type="radio" name="user_type" value="representative"> Bike Service Representative<br>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
