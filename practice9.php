<?php>
/**1 URLとControllerやActionを紐付ける機能を何といいますか？

Routingの説明
アクセスしたアドレスに応じて対応するControllerのActionを呼び出す仕組みのこと。

2 あなたが考える、group化をすることのメリットを考えてみてください。

コードが見やすくなる
同じコードを書く手間がはぶける */


//3 「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
//});
//Route::get('admin/news/create', 'Admin\NewsController@add');
});

//3  「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください

Route:get('XXX', 'AAAController\bbb');
 
//4 応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。
Route::group(['prefix' => 'admin'], function() {   
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
});   



?>