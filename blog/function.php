<?php
    function showAllPosts(){
        require("pdo.php");
        $sql = "SELECT * FROM posts";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = array();
        while($row = $stmt->fetch()){
            $rows[] = $row;
        }
        return $rows;
    }
    function showPost($id){
        require("pdo.php");
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    }
    function storePost(){
        require("pdo.php");
        $sql = "INSERT INTO posts(title,content,user_id,categories_id,created_at,updated_at)VALUES(?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute([$title,$content,$user_id,$categories_id,$now,$now]);
    }
    function deletePost(){}
    function updatePost(){}


