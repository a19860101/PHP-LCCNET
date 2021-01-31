<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql); 
    // var_dump($result);
    // $row = mysqli_fetch_assoc($result);
    // $row = mysqli_fetch_array($result);
    // $row = mysqli_fetch_row($result);
    // var_dump($row);

    while($row = mysqli_fetch_assoc($result)){
        echo $row["name"];
        echo "<br>";
        echo $row["mail"];
        echo "<br>";
    }

