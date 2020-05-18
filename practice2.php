
<?php
//1 $aという変数に3を、$bという変数に７を代入して、echoを使って$a+$bの結果を表示してみましょう。

$a=3;
$b=7;
echo $a+$b;

//2 $array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。


$array_month = ["January","February","March","April","May","June","July", 
                 "August","September","October","November","December"];
                 
echo $array_month[7];




//3 $helloという変数に”Hello, “を $name という変数にあなたの名前を、$world という変数に”‘s World!” を代入して、
//  各変数を連結させて “Hello,あなたの名前’s World!” と表示してて、各変数を連結させて “Hello,あなたの名前’s World!” と表示してみましょう。

 $hello="Hello,";
 $name="jun";
 $world="'s World";
 
 echo $hello.$name.$world;

//4 $tech_boostに “tech “という文字列が代入されています。複合演算を使って、
//  echo $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう

$tech_boost="tech";
$tech_boost.="boost";
echo $tech_boost;

//5 【応用】次のプログラムにはバグがあります。
//  どこにバグが有るか調べて修正してみましょう。(バグは一つとは限りません。)

$calendar_2018 = {
"January" => "1月",
"February"=>"2月",
"March"=>"3月",
"April"=>"4月",
"May"=>"5月",
"June"=>"6月",
"July"=>"7月",
"August"=>"8月",
"September"=>"9月",
"October"=>"10月",
"November"=>"11月",
"December"=>"12月"
};

// 12月を表示する
echo $calendar_2018["December"];



?>





