<?php
// echo phpinfo();
date_default_timezone_set('Asia/Tokyo');



//課題1
 function double($int) {
  $result = $int * 2;
  return $result;
 }
 echo double(10);
 echo "\n";

//課題2
function sum($a, $b) {
  $result = $a + $b;
  return $result;
}
echo sum(1, 4);
echo "\n";

//課題3
function multipy($arr) {
  $result = array_product($arr);
  return $result;
}
$array = array(1, 3, 5, 7, 9);
echo multipy($array);
echo "\n";

//課題4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = max($arr);
return $max_number;
}
$int = array(0, 1, 2, 3, 4, 5);
echo max_array($int);
echo "\n";


//課題5
//strip_tags:文字列から HTML および PHP タグを取り除く関数
$str = "<h1>関数</h1>" . " <p>文字列</p>";
echo strip_tags($str) . "\n";

//array_push:配列の最後に値を追加する関数
$object = array("desk", "chair", "cap");
array_push($object, "clock", "pen");
print_r($object);

//array_merge:配列を結合する関数
$array1 = array(1, 2, 3);
$array2 = array(10, 20, 30);
$array3 = array(100, 200, 300);
$connect = array_merge($array1, $array2, $array3);
print_r($connect);

//time, mktime:1970年1月1日0時からの経過秒数を返す関数
$timestamp = time();
echo date("Y/m/d", $timestamp) . "\n";
echo "現在は 1970年から " . mktime() . " 秒経過しています" . "\n";

//date:
echo '現在は ' . date('Y年m月日 H時m分s秒です');
