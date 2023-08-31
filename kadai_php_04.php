<?php
// 課題1
function double($num) {
    $result = $num * 2;
    return $result;
}
echo double(2);
echo "\n";

// 課題2
function sum($a, $b) {
    $result = $a + $b;
    return $result;
}
echo sum(4,7);
echo "\n";

// 課題3
function product($arr) {
    $result = $arr[0];
    $count = count($arr);
    for ($i = 1; $i < $count; $i++){
        $result *= $arr[$i];
    }
    return $result;
}
$arr = [1, 3, 5, 7, 9];
echo product($arr);
echo "\n";

// 課題4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if ($a > $max_number){
        $max_number = $a;
    }
  }

  return $max_number;
}
$arr = [1,5,8,10,15];
echo max_array($arr);
echo "\n";

// 課題5
$str = '<p>テキストテキストテキスト</p>';
$deleteStr = strip_tags($str);
echo $deleteStr;
echo "\n";

$animals = ['cat', 'dog', 'rabbit'];
array_push($animals, 'bird', 'mouse', 'horse');
print_r($animals);
echo "\n";

$addAnimals = ['monkey', 'lion'];
$newAnimals = array_merge($animals, $addAnimals);
print_r($newAnimals);
echo "\n";

echo 'Now: ' . time();
echo "\n";

echo '2023年9月3日: ' . mktime(0,0,0,9,3,2023);
echo "\n";

echo date('Y年n月j日');