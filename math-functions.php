<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>
<form action="" method="post">
        <label>x: </label><br>
        <input type="text" name="x" id=""><br>
        <label for="y">y</label><br>
        <input type="text" name="y" id=""><br>
        <label for="z">z</label><br>
        <input type="text" name="z" id=""><br>
        <input type="submit" value="Enter">
    </form>
</body>
</html>

<?php
// Basic Math Functions in PHP

$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];

// Absolute value
// $total = abs($x);

// Power
// $total = pow($x, $y);

// Square root
// $total = sqrt($z);

// Maximum and Minimum
// $total = max($x, $y, $z);

// $total = min($x, $y, $z);

// Round
// $total = round($x);


// Ceiling
// $total = ceil($x);

// Floor
// $total = floor($x);

// Random number
// $total = rand(1, 100);

// Pi
// $total = pi();

echo $total;

?>
