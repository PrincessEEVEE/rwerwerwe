<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class test1 extends Controller 
{ 
		public function show() { 
								return view('test2', ['name' => 'kent', 'surname' => 'kentov']); 
							} 
}
?>