<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterationController extends Controller
{
    function showRegisterPage(Request $request)
    {
        return view("register");
    }

    function createUser(Request $request)
    {


        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        //auth()->login($user);

        return redirect()->to('/login');

    }
}
