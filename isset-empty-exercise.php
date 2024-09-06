<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset, empty</title>
</head>
<body>
    <form action="" method="post">
        <label>Username: </label><br>
        <input type="text" name="username" id=""><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="Enter">
    </form>
</body>
</html>

<?php
    if(empty($_POST['username'])){
        echo "Enter username";
    }else if(empty($_POST['password'])){
        echo "Password Missing";
    }else {
        echo "Hello, {$_POST['username']}";
    }
?>