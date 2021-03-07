<?php
    require_once("pdo.php");
    // var_dump($_FILES["gallery"]["name"]);
    // echo $_FILES["gallery"]["name"];
    // echo "<br>";
    // echo $_FILES["gallery"]["size"];
    // echo "<br>";
    // echo $_FILES["gallery"]["type"];
    // echo "<br>";
    // echo $_FILES["gallery"]["tmp_name"];
    // echo "<br>";
    // echo $_FILES["gallery"]["error"];
    // echo "<br>";

    extract($_FILES["gallery"]);
    // echo $name;
    // echo "<br>";
    // echo $size;
    // echo "<br>";
    // echo $type;
    // echo "<br>";
    // echo $tmp_name;
    // echo "<br>";
    // echo $error;
    // echo "<br>";
    // switch($type){
    //     case "image/jpeg":
    //         $gallery_name = md5(uniqid()).".jpg";
    //         break;
    //     case "image/gif":
    //         $gallery_name = md5(uniqid()).".gif";
    //         break;
    //     case "image/png":
    //         $gallery_name = md5(uniqid()).".png";
    //         break;
    //     default:
    //         header("location:index.php?error=1");
    // }
    
    $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
    if($ext != "jpg" && $ext != "jpeg" && $ext != "gif" && $ext != "png"){
        header("location:index.php?error=2");
        return;
    }

    $gallery_name = md5(uniqid()).".".$ext;
    $target = "images/".$gallery_name;

    if(!is_dir("images")){
        mkdir("images");
    }

    $sql = "INSERT INTO galleries (gallery_name, name, created_at)VALUES(?,?,?)";
    $stmt = $pdo->prepare($sql);
    

    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
            $stmt->execute([$gallery_name,$name,NOW()]);
            header("Refresh:1;url=index.php");
        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上傳錯誤.";
    }

