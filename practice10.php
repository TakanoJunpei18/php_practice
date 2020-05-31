<?php
/**1　Viewは何をするところでしょうか。簡潔に説明してみてください。 

*Controllerの指示によってアクセスしてきたユーザーのブラウザに表示するデータを生成するところ。


*2 プログラマーがhtmlを書かずにPHPなどのプログラミング言語やフレームワークを使う必要があるのはどういった理由でしょうか。

*プログラマーがフレームワークやプログラミング言語を用いるべき理由として、
*他のプログラマーとの記述内容の共有のしやすさと、記載内容が複雑化した際の中身の確認のしやすさではないかと考えております。
*動的にコンテンツを生成することで多様な表現が可能になる

【応用】 前々章でAdmin/ProfileControllerのadd Action, edit Action に次のように記述しました。*/

Route::group(['prefix' => 'admin'], function() {
Route::get('profile/create', 'Admin\ProfileController@add');
Route::get('profile/edit', 'Admin\ProfileController@edit');
});
 
public function add()
{
     return view('admin.profile.create');
}
public function edit()
{
     return view('admin.profile.edit');

}


?>


