<?php
    // array -> variables which can hold multiple values of same type

    $fruits = array("apple", "mango", "banana");

    // echo $fruits[0] . "<br>";
    // echo $fruits[1] . "<br>";
    // echo $fruits[2] . "<br>";
    // echo $fruits[3] . "<br>";

    // Array functions in PHP

    // array_push($fruits, "orange");
    // array_pop($fruits); // removes last element
    // array_shift($fruits); // removes first element
    // count($fruits);
    // $reversed = array_reverse($fruits);

    foreach($fruits as $fruit){
        echo $fruit . "<br>";
    }

?>