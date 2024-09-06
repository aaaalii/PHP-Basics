<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <form action="" method="get">
        <label>Username: </label><br>
        <input type="text" name="username" id=""><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="Enter">
    </form>
</body>
</html>

<?php
    echo $_GET['username'];
    echo "<br>";
    echo $_GET['password'];
?>