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
    function showPost(){}
    function storePost(){}
    function deletePost(){}
    function updatePost(){}


