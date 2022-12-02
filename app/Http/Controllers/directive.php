<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class directive extends Controller
{
	public function show() { 
								return view('directive.rts', ['numofd' => '7', 'day' => '3', 
									'month' => '6', 'age' => '15', 'arr' => ['1', '2', '4']]); 
							} 
    
}