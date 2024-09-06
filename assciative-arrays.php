<?php
    // Associative array with countries as keys and their capitals as values
    $capitals = array(
        "USA" => "Washington, D.C.",
        "Canada" => "Ottawa",
        "France" => "Paris",
    );

    // echo "The capital of France is " . $countriesAndCapitals["France"] . ".<br>";
    // echo "The capital of Japan is " . $countriesAndCapitals["Japan"] . ".<br>";
    // $capitals["USA"] = "lol";
    // array_pop($capitals);
    // array_shift($capitals);
    // $keys = array_keys($capitals);
    // $values = array_values($capitals);
    // $flipped = array_flip($capitals);
    // $reversed = array_reverse($capitals);

    foreach ($capitals as $key => $value) {
        echo "The capital of " . $key . " is " . $value . ".<br>";
    }
?>
