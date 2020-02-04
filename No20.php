<?php
//配列
// $array = array(2017,2018,2019,2020);
// echo '<br>';
// echo $array[0];

//連想配列
// $animal = array(
//   'dog' => '犬',
//   'cat' => '猫',
//   'bird' => '鳥',
// );
// echo $animal["dog"];

//論理型
// $result = ture;
// if ($result == ture) {
//   echo "成功しました";
// } else {
//   echo "失敗しました";
// }

// //論理演算子
// $value = 10;
// $result = $value == 20;
// var_dump($result);
// echo '<br>';
//
//
// $a = "20";
// $b = 20;
//
// $result = $a == $b;
// var_dump($result);
// //=> true が表示される
// echo '<br>';
//
// $result = $a === $b;
// var_dump($result);

// // 単行演算子
// $value = 10;
// $value++;
// echo $value;

// //複合演算子
// $value = 10;
// $value *= 5;
// echo $value;
// echo '<br>';
//
// $fruits = 'apple';
// $fruits .= ' orange';
// echo $fruits;

// //三項演算子
// $value = 10;
// // $result = ($value < 20) ? '$valueは 20 より小さい' : '$valueは 20 と等しいまたは大きい';
// // echo $result;
//
// $result = ($value < 20) ? "$value は 20 より小さい" : "$valueは 20 と等しいまたは大きい";
// echo $result;



// 課題1
$a = 3;
$b = 7;
echo $a + $b ;
echo '<br>';

//課題2
$array_month = array("1月","2月","3月","4月","5月","6月",
                     "7月","8月","9月","10月","11月","12月"
);
echo $array_month["7"];
echo '<br>';

//課題3
$hello = "Hello";
$name = " Yusuke";
$world = "‘s World!";
echo $hello. $name. $world;
echo '<br>';

//課題4
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo '<br>';


//課題5
$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar["December"];
