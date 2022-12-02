<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tcontr extends Controller
{
	public function show() { 
								return view('tcontr.qwe', ['text' => 'linktxt', 'href' => 'fhjfghfj', 'location' => ['contry' => 'Китай', 'cty' => 'Пекин'], 'year' => '2021', 'month' => '12', 'day' => '23', 'str' => '<b>строка</b>']); 
							} 
    
}
