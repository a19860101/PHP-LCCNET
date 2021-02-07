<?php
    $db_host = "localhost";
    $db_user = "banana";
    $db_pw = "banana";
    $db_name = "lccnet";

    $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("MySQL ERROR!!");
    // $conn = mysqli_connect("localhost","admin","admin","lcnet")or die('mysql error');

    mysqli_query($conn,"SET NAMES UTF8MB4");
