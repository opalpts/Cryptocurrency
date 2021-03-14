<?php

namespace App\Http\Controllers;
use App\Register;
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
        $email = request(['email']);
        $pwd = request(['password']);
        print_r($email);
        print_r($pwd);
        $user = Register::create(array('email' => $email,'pwd'=>$pwd));        
        //return redirect()->to('/home');
    }
}
