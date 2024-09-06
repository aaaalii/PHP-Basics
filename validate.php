<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <form action="" method="post">
        Email: <br>
        <input type="text" name="email" id="">
        <label>Username: </label><br>
        <input type="text" name="username" id=""><br>
        Password:
        <input type="text" name="age" id="">
        <input type="submit" value="Enter">
    </form>
</body>
</html>

<?php
   if(isset($_POST['submit'])){
    $email = filter_input(INPUT_POST, $_POST['email'], FILTER_VALIDATE_EMAIL);
    $username = filter_input(INPUT_POST, $_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, $_POST['age'], FILTER_VALIDATE_INT);
   }
?>