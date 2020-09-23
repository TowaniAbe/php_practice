<?php

$intger = 10;
echo $intger . "\n";

//------------------------------------------------------//

$height = 170;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// もし $height が 200 以上の数値なら、 else ifのあとの{ }の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
if ($height < 150) {
    echo "150未満の方はご乗車できません" ."\n";
} else if   ($height >= 200) {
    echo "200以上の方はご乗車できません" ."\n";
} else  {
    echo "ご乗車になれます" ."\n";
}


//------------------------------------------//

//数字が3以下のときは「あたり」、それ以外の場合は「はずれ」と出力する

$saikoronome = 1;

if ($saikoronome <= 3) {
    echo "あたり" ."\n";
} else {
    echo "はずれ" ."\n";
}



//------------------------------------------//

//switch文
$weekday = "水曜";
// $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示される

switch ($weekday) {
  case "月曜":
    echo "可燃ゴミの日です" ."\n";
    break;
  case "水曜":
    echo "資源ゴミの日です" ."\n";
    break;
  default:
     echo "回収はありません。" ."\n";
     break;
}

//-------------------------------------------------//

//for文
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

//------------------------------------//
$total = 0;
echo $total;

// $iが0から始まり、$iが１００以下の間繰り返し処理を行う。
for ($i = 0; $i <=100; $i++) {
    $total += $i;
}
 echo $total ."\n";
 
 //-----------------------------------//
 
 //foreach例文
 $doubututati = array("dog","cat","panda");
 
 foreach($doubututati as $animal){
     echo  "要素は" .$animal;
     echo  "\n";
 }
 
 
 //関数-----------------------------------//
 
 function sum() {
     
     $result = 0;
     
     for ($i = 1; $i <=10; $i++) {
         
         $result += $i;
         
     }
     
     return $result;
     
 }
 
 echo sum();
 
 //---------------------------------------//
function kakeru($arr) {
    
    $result = 1;
    
    foreach ($arr as $nandemo)

    
    $result *= $nandemo;
    
    
    return $result;
}
 echo kakeru(array(1,3,5,7,9)) ."\n";
 
 //------------------------------------------//
 
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

//--------------------------------------------//

$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result . "\n";

//----------------------------------------//

$text = '<p>Test paragraph.</p><!-- Comment --> Other text';
echo strip_tags($text);
echo "\n";

//----------------------------------//

$arr1 = [1, 2, 3];
array_push($arr1, 4, 5, 6);
print_r($arr1); 

//-----------------------------//


$value = mktime();
var_dump(date('Y年m月d日h時i分s秒', $value));