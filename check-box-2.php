<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Form</title>
</head>
<body>

<form action="" method="post">
    <input type="checkbox" id="apple" name="fruits[]" value="Apple">
    Apple<br>

    <input type="checkbox" id="banana" name="fruits[]" value="Banana">
    Banana<br>

    <input type="checkbox" id="cherry" name="fruits[]" value="Cherry">
    Cherry<br>

    <input type="checkbox" id="date" name="fruits[]" value="Date">
    Date<br><br>

    <input type="submit" name = "submit" value="Submit">
</form>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $fruits = $_POST['fruits'];

        foreach($fruits as $fruit){
            echo $fruit . "<br>";
        }
    }
?>
