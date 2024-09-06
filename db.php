<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "test";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        echo "DB connected";
    } catch (\Throwable $th) {
        echo $th;
    }

    // if($conn != null){
    //     echo "DB connected";
    // }else {
    //     echo "Connection Failed";
    // }
?>