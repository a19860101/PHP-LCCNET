<?php
    require_once("pdo.php");

    extract($_POST);

    unlink("images/".$g);
    $sql = "DELETE FROM galleries WHERE id = ?";
    $stmt = $pdo->prepare($sql);;
    $stmt->execute([$id]);
    
    

    header("location:index.php");