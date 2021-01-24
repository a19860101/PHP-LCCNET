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
    // foreach($netflix as $n){
    //     echo $n;
    // }


    $users = [
        "name"  =>  "John",
        "mail"  =>  "asdf@gmail.com",
        "phone" =>  "0987654321"
    ];
    //key鍵 => value值

    // echo $users["phone"];
    // foreach($users as $key => $value){
    //     echo $key.":".$value;
    //     echo "<br>";
    // }

    //is_array()
    // var_dump(is_array($c));

    //in_array();
    // var_dump(in_array("天竺鼠車車",$c));

    echo count($netflix);

    // compact()
    $books = "精通php mysql ";
    $cartoon = "天竺鼠車車";
    $test = compact("books","cartoon");
    var_dump($test);
    
    // extract()
    var_dump(extract($users));
    echo $name;
    echo $mail;
    echo $phone;
    // $name = $users["name"];
    // $mail = $users["mail"];
    // $phone = $users["phone"];
    // echo $name;
