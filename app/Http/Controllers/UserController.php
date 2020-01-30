<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //sjh 200130 create this controller to signup User
    public function create()
    {
        return view('users.create');
    }
}
