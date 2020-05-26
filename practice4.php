
<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください


function sum($max){
 $result = 0;
 for($i = 1; $i<= $max; $i++){
        
 $result += $i;
}
return $result*2;
}

echo sum (100);
   echo "\n";


//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b){
 return $a+$b;
}

 echo f(1,2);
   echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function e($arr){
    
$result =1;
    
foreach( $arr as $x ){
$result *= $x;
}
return $result ;
}

$arr=[1,3,5,7,9];
echo e($arr);
   echo "\n";


//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。
//途中の部分を完成させてください。

function max_array($arr){
$max_number = $arr[0];

 foreach($arr as $a){
 if ($max_number < $a){
      $max_number = $a;
      
 }else{ echo $max_number;

}
return $max_number;
} 
$max = max_array(array(1,4,6,7));
echo $max;
echo "\n";
}



//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください(5個）。

//１　　strip_tags
//strip_tags()関数は文字列の中のHTMLタグやPHPタグを削除できる。

$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除くよっ！</p>";
echo strip_tags($str) ."\n";


//２　　array_push
//一つ以上の要素を配列の最後に追加
//プログラム途中で要素数が可変する際などに使用

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

//３　　array_merge
//ひとつまたは複数の配列をマージする

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array = array_merge($array1, $array2);
 
print_r($array);


//４　　time, mktime

//UNIXタイムスタンプとは1970年1月1日00:00:00 
//GMTから指定された時刻までの通算秒を表す数値。

//time関数は現在時刻のUNIXタイムスタンプを取得
echo time()."\n";


//mktime関数は指定した日時のUNIXタイムスタンプを取得
echo mktime(1,1,1,18,1,1998)."\n";


//５　　date
//日付や時刻を書式化

//指定したフォーマット
// Y 年(西暦の4桁)
//月(1桁で先頭に0を付けいない)
//日（2桁の日付）

$date= date('Y/m/d');
echo $date;


?>


