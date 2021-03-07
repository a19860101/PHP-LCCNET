<?php
    session_start();
    // session_destroy();
    unset($_SESSION["AUTH"]);
    header("location:index.php");