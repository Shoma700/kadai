<?php

echo "--------------------------\n";
echo "\n";
echo "--------------------------\n";
echo 'PHP/Laravel 04 関数を理解しよう';
echo "\n";

echo "\n";
echo '課題1';
echo "\n";
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function Double_Number($number){
    $result = $number * 2;
    return $result;
}
echo Double_Number(9);
echo "\n";

echo "\n";
echo '課題2';
echo "\n";
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function Sum($a, $b){
    $result = $a + $b;
    return $result;
}
echo Sum(100, 20);
echo"\n";

echo "\n";
echo '課題3';
echo "\n";
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function Multiplied_By($arr){
    $result = 1;
    foreach ($arr as $i){
        $result *= $i;
    }
    return $result;
}
$arr = array("1","3","5","7","9"); 
echo Multiplied_By($arr);
echo "\n";

echo "\n";
echo '課題4';
echo "\n";
//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    if($max_number < $a){
        $arr[0] = $a;
    }
 $max_number = $arr[0];
 }
 return $max_number;
}

$arr = array("1","3","5","90","9"); 
echo max_array($arr);
echo "\n";

echo "\n";
echo '課題5';
echo "\n";
//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

//strip_tags
echo 'strip_tags';
echo "\n";
$str = "<h1>HTMLタグを含む文字列からタグを取り除くスクリプト</h1>"."\n"
        ."<p>pタグ付き文</p>";
        
echo strip_tags($str)."\n";
echo strip_tags($str, "<p>")."\n";

//array_push
$arr = array("0","1","2","3");
array_push($arr ,"4");
echo "array_pushで配列に4を追加して呼び出した → " .$arr[4]."\n";

//time, mktime
//date

$dt = date('Y/m/d', time());
echo $dt."\n";

$mt = mktime(10, 10, 10, 9, 30, 2019);
echo date('Y/m/d', $mt)."\n";


//以上課題




















/*
function sum1(){
    $total = 0;
    for($i = 1; $i <=10; $i++){
        $total += $i;
    }
    return $total;
}
echo sum1();
echo "\n";

function sum2($max){
    $result = 0;
    for ($i = 0; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum2(100);
echo "\n";

function print_number(){
    for($i = 1; $i <=10; $i++){
        echo $i;
    }
}
echo print_number();
echo "\n";

$string = 'AAAAABBBBB';
echo strlen($string);
echo "\n";

$word = 'I like ruby';
$new_word = str_replace('ruby','PHP',$word);
echo $new_word;
echo "\n";

$array1 = array("1","2","3","4","5","aa");
echo count($array1);
echo "\n";

$sort_array = array("1","6","3","4","5","9","8","2","10");
asort($sort_array);
echo print_r($sort_array);
echo "\n";

arsort($sort_array);
echo print_r($sort_array);
echo "\n";
*/


?>