<?php
    require_once("conn.php");
    extract($_POST);
    $sql = "DELETE FROM products WHERE id = {$id}";
    mysqli_query($conn,$sql);

    header("Location:index.php");