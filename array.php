<?php
    $a = array();
    $a[0] = "天竺鼠車車";
    $a[1] = "天現飽飽";
    $a[2] = "鬼滅之認";
    // echo $a;
    // var_dump($a);

    // $b = array("天竺鼠車車","天現飽飽","鬼滅之認");
    // var_dump($b);
    
    $c = ["天竺鼠車車","天現飽飽","鬼滅之認"];
    // var_dump($c);
    
    // echo $c[1];
    $netflix = ["驅魔麵館","亞森。羅蘋","晉級的巨人","璀璨帝國","末日激戰","奔向愛情","SweetHome","未來媽媽","鬼滅之認"];

    // 陣列迭代
    // for($i=0;$i<9;$i++){
    //     echo $netflix[$i];
    // }
    // for($i=0;$i<count($netflix);$i++){
    //     echo $netflix[$i];
    // }

    foreach($netflix as $n){
        echo $n;
    }

