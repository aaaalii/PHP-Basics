<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
<form action="" method="post">
        <label>Country: </label><br>
        <input type="text" name="country" id=""><br>
        
        <input type="submit" value="Enter">
    </form>
</body>
</html>

<?php
    // Associative array with countries as keys and their capitals as values
    $capitals = array(
        "USA" => "Washington, D.C.",
        "Canada" => "Ottawa",
        "France" => "Paris",
    );

    $capital = $capitals[$_POST["country"]];
    echo $capital;
?>
