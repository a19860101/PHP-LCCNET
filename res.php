<?php
    //全域變數
    // echo $_POST;
    // var_dump($_POST);
    // $user = $_POST["user"];
    // $mail = $_POST["mail"];
    // $phone = $_POST["phone"];
    // $gender = $_POST["gender"];
    // $edu = $_POST["edu"];
    // $content = $_POST["content"];
    extract($_POST);
    echo $user;
    echo "<br>";
    echo $mail;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $edu;
    echo "<br>";
    echo $content;
    echo "<br>";