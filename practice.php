
<?php
echo "--------------------------\n";
echo "\n";
echo "--------------------------\n";
echo "\n";
echo 'PHP/Laravel 02 PHPの型と基本的な式を理解しよう';
echo "\n";

echo "\n";
echo '課題1';
echo "\n";
$a = 3;
$b = 7;
echo $a + $b."\n";

echo "\n";
echo '課題2';
echo "\n";
$array_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[7];
echo "\n";

echo "\n";
echo '課題3';
echo "\n";
$hello = 'Hello,';
$name = 'Maeda Shoma';
$world = '’s World!';
echo $hello.$name.$world;
echo "\n";

echo "\n";
echo '課題4';
echo "\n";
$tech_boost = 'tech';
echo '「' . $tech_boost . ' boost」';
echo "\n";

echo "\n";
echo '課題5';
echo "\n";
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
echo "\n";

?>
<?php
//echo "--------------------------\n";
echo 'PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう';
echo "\n";

echo "\n";
echo '課題1';
echo "\n";
//$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示するように実装してください。
$name = 'Maeda';
if ($name == 'Maeda'){
    echo '私は あなたの名前 です';
}else{
    echo 'あなたの名前ではありません';
}
echo "\n";

echo "\n";
echo '課題2';
echo "\n";
//for文を使って、1から10000までの合計の値を表示してください。
$total = 0;
for ($i = 1; $i <= 10000; $i++){
    $total += $i; 
}
echo $total;
echo "\n";

echo "\n";
echo '課題3';
echo "\n";
//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("apple","orange","banana","lemon","strawberry");
foreach($fruits as $fruit){
    echo "好きなフルーツは".$fruit."です。";
    echo "\n";
}

echo "\n";
echo '課題4';
echo "\n";
//【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

















/*
echo "--------------------------\n";
$height = 160;
if ($height < 150){
    echo '150㎝未満は乗車不可';
}else{
    echo '乗車可能です';
}
echo "\n";

$height = 230;
if ($height < 150){
    echo '150㎝未満の方は乗車不可';
}elseif ($height >= 200){
    echo '200㎝以上の方は乗車不可';
}else{
    echo '乗車可能です';
}
echo "\n";


$weekday = "月曜";
switch ($weekday){
    case "月曜":
        echo '可燃ごみの日です';
    break;
    case "水曜":
        echo '不燃ごみの日です';
    break;
    default:
        echo '回収はありません';
    break;
}
echo "\n";

$weekday = "木曜";
switch ($weekday){
    case "月曜":
    case "木曜":
        echo '可燃ごみの日です';
    break;
    case "水曜":
        echo '不燃ごみの日です';
    break;
    default:
        echo '回収はありません';
    break;
}
echo "\n";

$i = 1;
for ($i = 1; $i <= 10; $i++){
    echo $i;
}
echo "\n";


$total = 0;
for ($i = 1; $i <=100; $i++){
    $total += $i; 
}
echo $total;
echo "\n";

$fruits = array("apple","banana","orange");
echo count($fruits);
echo "\n";

for ($i = 0; $i <= count($fruits)-1; $i++){
    echo '要素は'.$fruits[$i].'です。';
    echo "\n";
}
echo "\n";

$animals = array("dog","cat","sheep");
foreach($animals as $animal){
    echo '要素は'.$animal.'です';
    echo "\n";
}
*/

?>



<?php
/*
echo "--------------------------\n";
echo 'hello php!';
echo "\n";

echo "--------------------------\n";
//変数$integerに20を代入//
$integer = 20;
//変数$stringにabsを代入//
$string = 'abc';

echo "$integer\n";
echo "$string\n";

$new_integer = $integer + 10;
echo "$new_integer\n";

$red_fluit = "APPLE";
$yello_fluit = 'banana';
$array = [2017,2018,2019,2020];
echo "$array[0]\n";
echo "$array[2]\n";

$array2 = ["spring","summer","autum","winter"];
echo "$array2[2]\n";

$animals = [
    "cat" => "猫",
    'dog' => '犬',
    "bird" => "鳥"
    ];
echo $animals["cat"]."\n";
echo $animals['dog']."\n";

$result = true;
if ($result == true){
    echo 'true'."\n";
}else{
    echo 'false'."\n";
};

$value1 = 1;
echo $value1 + 9;
echo "\n";
$value2 = 2;
echo $value2 - -8;
echo "\n";
$value3 = 3;
echo $value3 * 3 + 1;
echo "\n";
$value4 = 4;
echo $value4 / 4 * 10;
echo "\n";

$string2 = 'AAA';
echo $string2.'BBB';
echo "\n";
echo "\n";

$value = 10;
$result = $value == 10;
var_dump($result);
echo "\n";

$value = 19;
echo $value;
echo "\n";
$result = $value < 20;
var_dump($result);
echo "\n";

echo $value;
echo "\n";
$result = $value > 18;
var_dump($result);
echo "\n";

echo "--------------------------\n";

$a = "20";
$b = '20';
$c = 20;

$result = $a == $b;
var_dump($result);
echo "\n";

$result = $b == $c;
var_dump($result);
echo "\n";

$result = $a == $c;
var_dump($result);
echo "\n";

echo "--------------------------\n";

$result = $a === $b;
var_dump($result);
echo "\n";

$result = $b === $c;
var_dump($result);
echo "\n";

$result = $a === $c;
var_dump($result);
echo "\n";

$value = 10;
++$value;
echo $value;
echo"\n";

$value = 10;
$value++;
echo $value;
echo"\n";

$value = 10;
--$value;
echo $value;
echo"\n";

$value =10;
$value += 5;
echo $value;
echo"\n";

$value = 10;
$value -= 5;
echo $value;
echo"\n";

$value = 10;
$value *= 5;
echo $value;
echo"\n";

$value = 10;
$value /=3;
echo $value;
echo"\n";

$value = 'orange';
$value .= ' apple';
echo $value;
echo"\n";

echo "--------------------------\n";
$value = 10;
$result = ($value < 20)?
        '$valueは20より小さい' : 
        '$valueは20に等しいか、20より大きい';
echo $result;
echo"\n";


$value = 10;
$result = ($value < 20)?
        "$value"."は20より小さい" :
        "$value"."は20に等しいか、20より大きい";
echo $result;
echo"\n";

echo "--------------------------\n";
*/
?>