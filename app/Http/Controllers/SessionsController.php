<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            //登录成功后的通知
            session()->flash('success', '欢迎回来');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            //登陆失败后的相关操作
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }

        return;
    }

    public function destory()
    {
        Auth::logout();
        session()->flash('sucesss', '恁已成功退出');
        return redirect('login');
    }
}
