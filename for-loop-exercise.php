<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
<form action="" method="post">
        <label>Enter number to count: </label><br>
        <input type="number" name="number" id=""><br>
        
        <input type="submit" value="Enter">
    </form>
</body>
</html>

<?php
    $num = $_POST['number'];
    for($i = 0; $i < $num; $i++){
        echo $i . "<br>";
    }
?>