<?php
    session_start();

    extract($_POST);
    // var_dump($_POST);

    $_SESSION["AUTH"] = $_POST;

    // echo $_SESSION["AUTH"]["user"];
    // echo $_SESSION["AUTH"]["mail"];

    header("Location:index.php");