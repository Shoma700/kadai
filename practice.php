<?php
//課題1
$a = 3;
$b = 7;
echo $a + $b."\n";

//課題2
$array_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[7];
echo "\n";

//課題3
$hello = 'Hello,';
$name = 'Maeda Shoma';
$world = '’s World!';
echo $hello.$name.$world;
echo "\n";

//課題4
$tech_boost = 'tech';
echo '「' . $tech_boost . ' boost」';
echo "\n";

//課題5
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