<?php
    include "db.php";

    $query = "select * from test_table";
    try {
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "{$row['id']} <br>";
            }
        }
    } catch (\Throwable $th) {
        echo $th;
    }

    mysqli_close($conn);
?>