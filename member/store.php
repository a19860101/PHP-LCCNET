<?php
    session_start();
    try {
        require_once("pdo.php");
        extract($_POST);
        $sql = "INSERT INTO users(user,pw,created_at)VALUES(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user,$pw,$now]);

        echo "會員註冊成功，請重新登入!!";

        header("refresh:1;url=index.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }