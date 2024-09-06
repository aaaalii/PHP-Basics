<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons Form</title>
</head>
<body>

<form action="" method="post">

    <input type="radio" id="option1" name="choice" value="Visa">
    Visa<br>

    <input type="radio" id="option2" name="choice" value="Master Card">
    Master Card<br>

    <input type="radio" id="option3" name="choice" value="Jazzcash">
    Jazzcash<br><br>

    <!-- Submit Button -->
    <input type="submit" value="Submit">
</form>

</body>
</html>

<?php

    if(isset($_POST["choice"])){
        $choice = $_POST["choice"];
    }else {
        echo "Please make a selection";
    }

    if($choice == "Visa"){
        echo "You chose Visa";
    }else if($choice == "Master Card"){
        echo "You chose Master Card";
    }else if($choice == "Jazzcash"){
        echo "You chose Jazzcash";
    }
?>
