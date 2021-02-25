<?php

//課題1
function sum($max) {
    
    $result =$max*2;
return $result;

}
// 関数を実行
echo sum(49);
?>

<?php
//課題2
$a = 10;
$b = 10;

function f($a, $b){
//処理したい内容


$result = $a + $b;
return $result;

}

echo f($a, $b);
?>

<?php

//課題3
$arr = array(1,3,5,7,9);
function accumulation ($arr){
    $result = 1;
    foreach($arr as $a)
    $result*= $a;
    return $result;
}
echo accumulation($arr);

?>

<?php


//課題4
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($a > $max_number) {
         $max_number = $a;
     }
 }

 return $max_number;
 }
 echo max_array(array(10,5,20,40,7));
 
?>

<?php
//課題5
//strip_tags

$string = 'テスト<br><p>テスト</p><strong>テスト</strong>';

// HTMLタグを除去
$new_string = strip_tags($string);

echo $new_string;

?>

<?php
//array_push

$arr = array("cat","dog");

//配列の最後に文字列を追加
array_push($arr,"raccoon dog","Capybara");
print_r($arr);

?>

<?php
//array_merge

$array1 = [1,2,3,4,5,];
$array2 = [6,7,8,9,10];
$array3 = [11,12,13,14,15];

//配列の結合
$array = array_merge($array1,$array2,$array3);
print_r($array);

?>

<?php
//time
//現在の日付のタイムスタンプを取得
//タイムスタンプ=1970年1月1日からの経過秒数
echo time();


// mktime
//指定した日付のタイムスタンプを取得
  $time = mktime(0, 0, 0, 1, 1, 2020);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  
?>

<?php
//date
// 使用するデフォルトのタイムゾーンを指定します。
date_default_timezone_set('Asia/Tokyo');

//本日の日付を指定したタイムスタンプを指定フォーマットで取得。
$today = date("F j, Y, g:i a"); 
//明日の日付のタイムスタンプを取得
$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);

//本日の日付を指定したタイムスタンプを指定フォーマットで出力。
echo $today . "\n";
//明日の日付のタイムスタンプを出力
echo $tomorrow . "\n";
echo $lastmonth . "\n";
echo $nextyear . "\n";

echo date("Y/m/d H:i:s") . "\n"; 
echo date("Y/m/01") . "\n"; 
echo date("Y/m/t") . "\n";

?>