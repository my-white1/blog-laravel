<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    // $foo = session()->get('foo');

    return view('login.index');
    }

    public function store(Request $request){

        session(['alert' => __('Welcome :)')]);

        // if (true){
        //     return redirect()->back()->withInput();
        // }

        return redirect()->route('user.user');
    }
}
