<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        Auth::logout();
        $user = Auth::user();
        $id = Auth::id();
        $guard_name = Auth::guard();
        dump($user);
        dump(Auth::loginUsingId(1));
        dump($user['email']);
        dump($id);
        dump($guard_name);
        dump(Auth::check());
        dump(Auth::viaRemember());
        return view('home');
    }
}
