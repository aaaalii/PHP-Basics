<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Username: </label><br>
        <input type="text" name="username" id=""><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" name = "submit" value="Enter">
    </form>
</body>
</html>

<?php
    // foreach($_SERVER as $key => $value){
    //     echo $key . " = " . $value . "<br>";
    // }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo $_POST['username'];
        echo "<br>";
        echo $_POST['password'];
    }
?>