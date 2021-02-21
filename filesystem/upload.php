<?php
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

    if($error == 0){
        if(move_uploaded_file($tmp_name,"images/".$name)){
            echo "上傳成功";
        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上傳錯誤.";
    }

