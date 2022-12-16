<?php

namespace App\Http\Controllers;

use App\Models\prod;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function base()
    {
        $prod = prod::all();
        return view('catalog', ['prod'=>$prod]);
    }

    public function desc($id)
    {
        $prod = prod::find($id);
        return view('describe', ['prod'=>$prod]);
    }
}
