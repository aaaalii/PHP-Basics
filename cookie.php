<?php
    setcookie("fav_food", "aloo", time() - 0, "/");
    setcookie("fav_drink", "shake", time() + (2 * 86400), "/");
    setcookie("fav_desert", "ice_cream", time() + (2 * 86400), "/");

    // foreach($_COOKIE as $key => $value){
    //     echo $key . " " . $value . "<br>";
    // }

    if(isset($_COOKIE['fav_food'])){
        echo "Buy " . $_COOKIE['fav_food'];
    }else {
        echo "i don't know your fav food";
    }

?>