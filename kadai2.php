<?php

// kadai1
$name = "abe_towani";
if ($name == "yamada_tarou") {
   echo "あなたの名前ではありません";
 } else {
   echo "わたしはabe towaniです" . "\n";
 }
 
// kadai2
  $total = 0;
 
 for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
 }
 echo $total . "\n";
 
 // kadai3
 $fruits = array("orange","apple","pear","grape","strawberry");
 
 foreach($fruits as $fruits){
     echo "要素は" . $fruits;
     echo "\n";
 }
 
 //kadai4
 // for文の始めの値を定義する
$start = 5;
/* for文の終わりの値を定義する */
$end = 105;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n"; 
  }
}