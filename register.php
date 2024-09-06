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
    include "db.php";
    echo "<br>";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['submit'])){
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
            if(empty($username)){
                echo "Enter username.";
            }
            else if(empty($password)){
                echo "Enter password.";
            }else {
                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "insert into register (username, password) values ('{$username}', '{$password}')";
                
                try {
                    mysqli_query($conn, $query);
                    echo "Insertion Successfull";
                } catch (\Throwable $th) {
                    echo $th;
                }
            }
        }
    }
?>