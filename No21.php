<?php
//さまさまな条件の比較
// $a = 3;
// $b = 3;
// $c = "3";
// var_dump($a != $b) . "\n";
// var_dump($a !== $c);


// "\n" : ソースコード上での改行
//'<br>': ブラウザ上での改行


//forによる繰り返し処理
// $total = 0;
// for ($i=0; $i <= 100 ; $i++) {
//   $total += $i;
//   echo $total . "\n";
// }

// $fruits = array('apple','orange','lemon');
// echo count($fruits) . "\n";
//
// for ($i=0; $i < count($fruits); $i++) {
//   echo "要素は" . $fruits[$i];
//   echo "\n";
// }


//foreachに繰り返し処理
// $animals = array('dog','cat','panda');
// foreach ($animals as $animal) {
//   echo "要素は" . $animal;
//   echo "\n";
// }


//課題1
$name = "Yusuke";
if ($name == "Yusuke") {
  echo "私は あなたの名前 です\n";
} else {
  echo "あなたの名前ではありません\n";
}

//課題2
$total = 0;
for ($i=0; $i <= 10000 ; $i++) {
  $total += $i;
}
echo $total . "\n";

//課題3
$fruits = array('apple', 'orange', 'strawberry', 'melon', 'grape');
foreach ($fruits as $favorite_fruits) {
  echo $favorite_fruits;
  echo "\n";
}

//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
