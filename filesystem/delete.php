<?php
    extract($_POST);
    unlink($g);
    header("location:index.php");