<?php
//算術
$x = 10;
$y = 5;

echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";

//比較

var_dump($x > $y);
echo "<br>";
var_dump($x >= $y);
echo "<br>";
var_dump($x < $y);
echo "<br>";
var_dump($x <= $y);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";

//指定

echo $x = $y;   // 5
echo "<br>";
echo $x += $y; //$x = $x + $y 10
echo "<br>";
echo $x -= $y; // 5
echo "<br>";
echo $x *= $y; // 25
echo "<br>";
echo $x /= $y; // 5
echo "<br>";
echo $x %= $y; // 0
echo "<br>";

//邏輯 and or not
$a = 100;
$b = 10;
var_dump($x && $y);
// var_dump(!$a);

// 0 null ""  見readme
