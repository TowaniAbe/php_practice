<?php
echo 'hello php!' . "\n";

$value = 6;
echo $value + 4 . "\n";

$value = 10;
echo $value / 5 . "\n";

$value = 3;
echo $value * 4 . "\n";
 
 $value = 5;
 echo $value - 5 . "\n";
 
 $value = 444;
 echo 444 . 999 . "\n";
 
 //if elesについての
 $height = 190;
 
 if($height < 150) {
     echo "150センチ未満の人はご乗車できません". "\n";
 } else if ($height >= 200) {
     echo "200センチ以上の方はご乗車できません". "\n";
 } else {
     echo "ご乗車になれます". "\n";
 }
     
     //いろんな記号
$a = 3;
$b = 3;
$c = "3";

var_dump($a == $b). "\n";

var_dump($a != $b). "\n";

var_dump($a >= $b). "\n";

var_dump($a == $c). "\n";

var_dump($a === $c). "\n";

$score = 100;
if ($score >= 80) {
    echo "合格です" . "\n";
    if($score == 100)
    echo "満点です" . "\n";
} else{
    echo "不合格です" . "\n";
    
}

$weekday = "水曜";

switch($weekday){
  case "月曜";
    echo "可燃ゴミの日です" . "\n";
    break;
  case "水曜";
    echo "資源ゴミの日です" . "\n";
    break;    
  default;
    echo "ゴミの日ではありません" . "\n";
  break;
}

switch($weekday){
    case "月曜";
    echo "可燃ゴミの日です" . "\n";
  case "水曜";
    echo "資源ゴミの日です" . "\n";
  default;
    echo "ゴミの日ではありません" . "\n";
}

////////////////////////////////////

$total = 1;
 echo $total . "\n";
 
 for ($i = 0; $i <= 100; $i++) {
  $total += $i;
 }
 echo $total . "\n";
 
 
 ////////////////////////////
 
 $fruits = array("tomato","apple","pear");
 
 echo count($fruits). "\n";

for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" . $fruits[$i];
    echo "\n";
}
    
    
    
 
 //foreach文////////////////////////
$animals = array("dog","cat","panda");

foreach($animals as $animal) {
echo "縦書き". $animal;
echo "\n";
}

///////////////////////////////
$name = "abetowani";

if ($name = "わたしはあなたの名前です") {
    echo $name . "\n";
} else{
    $name != "わたしはあなたの名前ではありません";
    echo $name . "\n";
}
 
 
 //仮引数と引数/////////////////////
 function test($MAX) {
     
     $result = 1;
     
     for ($i = 1; $i <= $MAX; $i++ ) {
         $result += $i;
         
     }
     
     return $result;
     
 }
 echo test(100) ."\n";
 
 