<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles;

class ProfileController extends Controller
{
    //
    public function add ()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        return redirect ('admin/profile/create');
    }
    
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
        // Validationを行う
        $this->validate($request, Profiles::$rules);

        $profiles = new Profiles;
        $form = $request->all();
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
        // データベースに保存する
        $profiles->fill($form);
        $profiles->save();
        
        return redirect('admin/profile/edit');
    }
}
