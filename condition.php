<?php
    //判斷示

    $x = 0;
    if($x > 0){
        echo "Success";
    }

    if($x > 0){
        echo "Success 2";
    }else{
        echo "Error";
    }

    if($x > 0){
        echo "正整數";
    }elseif($x < 0){
        echo "負整數";
    }else{
        echo "error";
    }