<?php
    session_start();
    try {
        require_once("pdo.php");
        extract($_POST);
        $sql = "SELECT * FROM users WHERE user = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$row){
            echo "帳號密碼錯誤!!";
            return ;
        }
        if($row["pw"] == $pw){
            $_SESSION["AUTH"] = $_POST;
            echo "登入成功";
            header("Refresh:1;url=index.php");
        }else{
            echo "帳號密碼錯誤!!";
        }
    }catch(PDOException $e)
    {
        echo $e->getMessage();
    }