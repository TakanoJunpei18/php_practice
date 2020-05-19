<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください


function sum($max){
    $result = 0;
    for($i = 1; $i<= $max; $i++){
        
        $result += $i;
    }
    return $result *2;
   
    
}

echo sum (100);


//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b){
    return $a+$b;
    
}

echo f(1,2)

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function number ($array){
$result($arr as $x){
    $result*=$result;

}
number(array(1,3,5,7,9));

}
$result;


?>

