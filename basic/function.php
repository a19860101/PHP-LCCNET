<?php
    function test(){
        echo "TEST";
    }

    function calc($x){
        echo $x * 1.5;
    }

    function square($x,$y){
        echo $x*$y;
    }
    // square(10,20);

    function hello($name){
        return "HELLO".$name;
    }

    $a = hello("John");
    echo $a;

    $b = calc(100);
    echo $b;