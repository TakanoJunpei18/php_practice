
<?php
//1 $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//  もし違ったら「あなたの名前ではありません」と表示するように実装してください。

$name ="jun";

if($name="jun") {
    echo "私はjunです";
}else{
    echo "私はjunではありません";


}
//2 for文を使って、1から10000までの合計の値を表示してください

for($i = 1; $i < 10000 ; $i++){
    echo $i;
}


//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください

$fruits = array("rinngo","suika","banana","meron","remon");

foreach($fruits as $fruit ){
    echo "要素は".$fruit;
    echo "\n";
}

?>




