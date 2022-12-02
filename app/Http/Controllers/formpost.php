<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class formpost extends Controller
	{
		public function form()
		{
			
		}
		
		public function result(Request $request)
		{
			if ($request->isMethod('get')){

				return view('formpost.post',['text'=>""]);
			}

			$num1 = $request->input('num');
			$num2 = $request->input('num2');
			$text = $num1+$num2;

		

			return view('formpost.result', ['text' => $text]);
		}


	}
?>