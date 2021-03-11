<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function save()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //print_r(request(['email', 'password']));
        $user = Register::create(request(['email', 'password']));
        
        return redirect()->to('/home');
    }
}
