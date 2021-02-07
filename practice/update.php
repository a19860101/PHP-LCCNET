<?php
    require_once("conn.php");
    extract($_POST);
    $sql = "UPDATE products SET 
            title       = '$title',
            price       = '$price',
            description = '$description',
            sale        = '$sale',
            quantity    = '$quantity',
            discount    = '$discount'
            WHERE id = {$id}";

    mysqli_query($conn,$sql);

    header("location:index.php");