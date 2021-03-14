<?php

namespace App\Http\Controllers;
use App\Buy_Sale;
use Illuminate\Http\Request;

class AddActionController extends Controller
{
    public function sale()
    {
        $this->validate(request(), [
            'amount' => 'required',
            'price' => 'required',
            'user' => 'required',
        ]);
        $action = 'sale';
        $amount = request(['amount']);
        $price = request(['price']);
        $user = request(['user']);
        $result = Buy_Sale::create(array('action' => $action,'amount'=>$price,'price'=>$amount,'user'=>$user));        
        //return redirect()->to('/home');
    }
    public function buy()
    {
        $this->validate(request(), [
            'amount' => 'required',
            'price' => 'required',
            'user' => 'required',
        ]);
        $action = 'buy';
        $amount = request(['amount']);
        $price = request(['price']);
        $user = request(['user']);
        $result = Buy_Sale::create(array('action' => $action,'amount'=>$price,'price'=>$amount,'user'=>$user));        
        //return redirect()->to('/home');
    }
    public function showbuy()
    {
        $result = DB::table('buy_sale')->where('action', 'buy');
        return view('result.index', ['result' => $result]);
    }
    public function showbsale()
    {
        $result = DB::table('buy_sale')->where('action', 'sale');
        return view('result.index', ['result' => $result]);
    }
}
