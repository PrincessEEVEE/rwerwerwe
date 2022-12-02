<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class form extends Controller
	{
		public function form()
		{
			return view('form.vbn');
		}
		
		public function result(Request $request)
		{
			$text = $request->input('text');
			$text1 = $request->input('text1');
			$text2 = $request->input('text2');
			return view('form.result', ['text' => $text, 'text1' => $text1, 'text2' => $text2 ]);
		}


	}
?>
