<?php
    // a variable is a container that holds data
    // data can be in form of string, integer, float, boolean etc
    echo "This page tells about the variables in PHP";
    echo "<br> Can declare a variable using a '$' sign followed by name of the variable.";
    // we can use back-slach as an escape sequence, if we want to use any special
    // character within our string
    echo "<br> Like this, <br> \$name = 'some sring'";

    echo "<br><br>Examples:";
    // string variable examples
    echo "<br> 'String'";
    $name = "Ali";
    $food = "Pizza";
    $greet = "Hello";
    $email = "somemail@gmail.com";

    echo "<br>";
    echo $name;
    echo "<br>";
    echo $food;
    echo "<br>";
    echo $greet;
    echo "<br>";
    echo $email;

    // int variable examples
    echo "<br> 'Integer'";
    $age = 25;
    $year = 2024;
    $quantity = 10;
    $price = 99;

    echo "<br>";
    echo $age;
    echo "<br>";
    echo $year;
    echo "<br>";
    echo $quantity;
    echo "<br>";
    echo $price;

    // float variable examples
    echo "<br> 'Float'";
    $height = 5.9;
    $weight = 72.5;
    $pi = 3.14;
    $percentage = 99.99;

    echo "<br>";
    echo $height;
    echo "<br>";
    echo $weight;
    echo "<br>";
    echo $pi;
    echo "<br>";
    echo $percentage;

    // boolean variable examples
    echo "<br> 'Boolean' ";
    echo "<br>bool variable prints nothing in case of false and 1 in case of true";
    $is_student = true;
    $is_employed = false;
    $has_license = true;
    $is_logged_in = false;

    echo "<br>";
    echo $is_student;
    echo "<br>";
    echo $is_employed;
    echo "<br>";
    echo $has_license;
    echo "<br>";
    echo $is_logged_in;

    echo "<br>";
    echo "<br>";

    echo "We can also use variables within a string";
    echo "<br>My name is {$name}";

?>