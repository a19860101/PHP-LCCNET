<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql); 
    // var_dump($result);
    $row = mysqli_fetch_assoc($result);
    var_dump($row["name"]);