<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <form action="" method="post">
        <label>Username: </label><br>
        <input type="text" name="username" id=""><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" name = "submit" value="Enter">
    </form>
</body>
</html>

<?php

    if(isset($_POST['submit'])){
        session_start();
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $_SESSION['username'] = $_POST['username'];

            echo $_POST['username'];
            echo "<br>";
            echo $_POST['password'];
            header("location: session.php");
        }else {
            echo "Missing username and password";
        }
        
        
    }
?>