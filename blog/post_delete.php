<?php
    include("function.php");
    deletePost($_POST["id"]);
    header("location:index.php");