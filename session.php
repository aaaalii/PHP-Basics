<?php
    // session comes from post.php
    echo "From post.php <br>";
    session_start();
    echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Destroy</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name = "submit" value="Logout">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        session_destroy();
        //header("location: session.php");
    }
?>