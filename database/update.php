<?php
    require_once("conn.php");
    extract($_POST);
    $interest = implode(",",$interest);

    $sql = "UPDATE students SET 
        name        = '$name',
        phone       = '$phone',
        mail        = '$mail',
        edu         = '$edu',
        gender      = '$gender',
        interest    = '$interest',
        content     = '$content'
        WHERE id    = {$id}";
    mysqli_query($conn,$sql);

    header("Location: index.php");