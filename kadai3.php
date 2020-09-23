<?php

//kadai1
function nibai($value) {
  return $value * 2;
}
echo nibai(10) . "\n";


//kadai2
function goukei($a, $b) {
    
    return  $a + $b;
}
echo goukei(3, 8) . "\n";


//kadai3
function zenbukakeru($arr) {
  $result = 1;
  
  foreach($arr as $number) {
    //$result = $result * $number;
    $result *= $number;
  }
  
  return $result;
  
}
echo zenbukakeru(array(1, 3, 5, 7, 9)) . "\n";

//kadai4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if ($max_number < $a) {
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array(array(1, 3, 5, 11, 7, 9)) . "\n";


//kadai5

//strip_tagsの利用方法①
$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result . "\n";

//strip_tags利用方法②
$text = '<p>Test paragraph.</p><!-- Comment --> Other text';
echo strip_tags($text);
echo "\n";


//array_pushの利用方法
$arr1 = [1, 2, 3];
array_push($arr1, 4, 5, 6);
print_r($arr1); 


//array_mergeの利用方法
$arr1 = [1, 2, 3,];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3); 


//time,date利用方法
$value = time();
echo $value . "\n";
echo date('Y/m/d', $value) . "\n";


//mktime,dateの利用方法
$value = mktime();
var_dump(date('Y年m月d日h時i分s秒', $value));

