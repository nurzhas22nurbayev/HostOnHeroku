<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('index');    
    }

    public function store(Request $request)
    {
        $users = new User;

        $users->fname = $request->input('fname');
        $users->lname = $request->input('lname');
        $users->email = $request->input('email');
        $users->password = $request->input('password');

        $users->save();
    }
}

