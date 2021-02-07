<?php
    require_once("conn.php");
    extract($_POST);
    $sql = "INSERT INTO products(title, price, description, discount, quantity, sale)VALUES('$title','$price','$description','$discount','$quantity','$sale')";
    mysqli_query($conn,$sql);
    header("Location:index.php");