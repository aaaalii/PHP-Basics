<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <form action="" method="post">
        <label>Enter Quantity: </label><br>
        <input type="text" name="quantity" id=""><br>
        <input type="submit" value="Enter">
    </form>
</body>
</html>

<?php
    $price = 3.44;
    $quantity = $_POST['quantity'];
    $total = $price * $quantity;

    echo "The total price is: \$" .  $total;
?>