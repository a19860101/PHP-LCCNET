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
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);//不主動報錯
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);//主動報錯
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//主動報例外


    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $sql = "SELECT * FROM test";
    $res = $pdo -> exec($sql);//mysqli_query($conn,$sql);
    if($res){
        var_dump($result);
    }else{
        echo $pdo->errorCode();
        echo "<br>";
        var_dump($pdo->errorInfo());
    }

    // try{
    //     $sql = "SELECT * FROM test";
    //     $res = $pdo -> exec($sql);
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }
