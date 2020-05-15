
<?php
//1 $aという変数に3を、$bという変数に７を代入して、echoを使って$a+$bの結果を表示してみましょう。

$a=3;
$b=7;
echo $a+$b;

//2 $array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。


echo $array_month = ["January","February","March","April","May","June","July", 
                 "August","September","October","November","December"];
                 
echo $array_month[7];




//3 $helloという変数に”Hello, “を $name という変数にあなたの名前を、$world という変数に”‘s World!” を代入して、
//  各変数を連結させて “Hello,あなたの名前’s World!” と表示してて、各変数を連結させて “Hello,あなたの名前’s World!” と表示してみましょう。

 $hello="Hello,";
 $name="jun";
 $world="'World";
 
 echo $hello.$name.$world;

//4 $tech_boostに “tech “という文字列が代入されています。複合演算を使って、
//  echo $tech_boostと実行すると「tech boost」と表示されるように実装してみましょう

$tech_boost="tech";
$tech_boost.="boost";
echo $tech_boost


?>



