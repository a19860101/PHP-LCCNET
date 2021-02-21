<?php
    $db_host = "localhost";
    $db_user = "banana";
    $db_pw= "banana";
    $db_name = "lccnet";
    $db_charset = "utf8mb4";

    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    // $pdo = new PDO($dsn,$db_user,$db_pw);//建立PDO實體

    //例外處理 錯誤觸理
    try {
        $pdo = new PDO($dsn,$db_user,$db_pw);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
