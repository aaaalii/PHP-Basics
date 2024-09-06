<?php
    include "db.php";

    $query = "insert into test_table (id) values (3)";
    try {
        $result = mysqli_query($conn, $query);
        echo "<br> Inserted <br>";
    } catch (\Throwable $th) {
        echo $th;
    }

    mysqli_close($conn);
?>