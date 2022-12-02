<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class cycle extends Controller
{
	public function show() { 
								return view('cycle.main'); 
							} 
							public function show2() { 
								return view('cycle.test'); 
							} 
    
}