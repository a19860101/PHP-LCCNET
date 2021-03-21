<?php
    include("function.php");
    deleteCategory($_POST["id"]);

    header("location:category_create.php");