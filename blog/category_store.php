<?php
    include("function.php");
    storeCategory($_POST);
    header("location:category_create.php");