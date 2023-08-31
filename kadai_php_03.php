<?php
// 課題1
$name = "Azusa";
if ($name === "Azusa"){
    echo "私の名前は${name}です。";
}
else {
    echo 'あなたの名前ではありません。';
}

// 課題2
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

// 課題3
$fruits = ['apple', 'orange', 'peach', 'banana', 'grape'];
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

// 課題4
// for文の始めの値を定義する
$start = 1;
// for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}