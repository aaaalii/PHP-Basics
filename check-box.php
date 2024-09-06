<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Form</title>
</head>
<body>

<form action="" method="post">
    <input type="checkbox" id="apple" name="Apple" value="Apple">
    Apple<br>

    <input type="checkbox" id="banana" name="Banana" value="Banana">
    Banana<br>

    <input type="checkbox" id="cherry" name="Cherry" value="Cherry">
    Cherry<br>

    <input type="checkbox" id="date" name="Date" value="Date">
    Date<br><br>

    <input type="submit" name = "submit" value="Submit">
</form>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['Apple'])){
            echo "You like apple<br>";
        }
        if(isset($_POST['Banana'])){
            echo "You like banana<br>";
        }
        if(isset($_POST['Cherry'])){
            echo "You like cherry<br>";
        }
        if(isset($_POST['Date'])){
            echo "You like date<br>";
        }
        if(empty($_POST['Apple'])){
            echo "You don't like apple<br>";
        }
        if(empty($_POST['Banana'])){
            echo "You dont't like banana<br>";
        }
        if(empty($_POST['Cherry'])){
            echo "You dont't like cherry<br>";
        }
        if(empty($_POST['Date'])){
            echo "You dont't like date<br>";
        }
    }
?>
