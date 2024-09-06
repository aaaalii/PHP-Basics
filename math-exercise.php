<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>

<body>
    <form action="" method="post">
        <label>Radius: </label><br>
        <input type="text" name="radius" id=""><br>
        <input type="submit" value="Enter">
    </form>
</body>

</html>

<?php
$radius = $_POST['radius'];

$circumference = 2 * pi() * $radius;

$area = pi() * pow($radius, 2);

$volume = (4 / 3) * pi() * pow($radius, 3);

// Display results
echo "Circumference: " . $circumference . "<br>";
echo "Area: " . $area . "<br>";
echo "Volume: " . $volume . "<br>"; ?>