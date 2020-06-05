<?php
//1  ControllerとRoutingについてわからないことを書き出してメンターに質問してみましょう。



//2  Controllerの役割について、説明してください。
//modelとviewの仲介役

//3  ControllerとRoutingの役割について、説明してください。
//RoutingはユーザーからのアクセスをControllerに送るために必要なもの
//Controllerはmodelとviewの仲介役であり連携を取り合うのには必要不可欠なもの


//4 【応用】 artisanを使って、Admin/ProfileControllerを作成しましょう。
//5 【応用】 Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController 
{
    //
public function add()
{
    return view('admin.news.create');
}
public function create()
{
     return redirect('admin/profile/create');
}

public function edit()
{
    return view('admin.profile.edit');
}

public function update()
{
    return redirect('admin/profile/edit');
}
}


?>
