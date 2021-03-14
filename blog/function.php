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
    function storePost($request){
        require("pdo.php");
        extract($request);
        $user_id = 1;
        $category_id = 1;
        //key
        $k = array_keys($request);
        array_push($k,"user_id","category_id","created_at","updated_at");
        $k = implode(",",$k);
        // var_dump($k);
        // echo $k;

        //value
        $v = explode(",",implode(",",$request));
        array_push($v,$user_id,$category_id,$now,$now);
        // var_dump($v);

        //問號
        $q = implode(",",array_map(function(){
            return "?";
        },$v));
        // echo $q;

        // $sql = "INSERT INTO posts(title,content,user_id,category_id,created_at,updated_at)VALUES(?,?,?,?,?,?)";
        // $stmt = $pdo->prepare($sql);
        // $stmt -> execute([$title,$content,$user_id,$category_id,$now,$now]);

        $sql = "INSERT INTO posts(".$k.")VALUES(".$q.")";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($v);
    }
    function deletePost(){}
    function updatePost(){}


