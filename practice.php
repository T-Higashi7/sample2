<?php
echo 'hello php';

//課題1
$name = "Tomoyuki.higashida";
if  ( $name === "Tomoyuki.higashida") {
  echo "私は あなたの名前 です";
} else {
  echo "あなたの名前ではありません";
}

//課題2
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

//課題3
$fruits = array ("orange", "apple", "banana", "kiwi", "durian");
foreach($fruits as $fruits) {
  echo $fruits;
  echo "\n";
}

//課題4
/* for文の始めの値を定義する */
$start = 1;

/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
  
  if($i % 5 === 0) {
    echo $i;
    echo "\n";
  }
  
}
