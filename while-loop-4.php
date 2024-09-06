<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
<form action="" method="post">
        
        <input type="submit" name = "stop" value="Stop">
    </form>
</body>
</html>

<?php

    $running = true;
    $seconds = 0;

    while($running){
        if(isset($_POST['stop'])){
            $running = false;
        }
        else{
            $seconds++;
            echo $seconds . "<br>";
        }
    }
?>