<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request; // подключаем класс Request

	class session extends Controller
	{
		public function put(Request $request) // выполняем инъекцию
		{
			$request->session()->put('keq', 'sadad');

			

			return view('session.pwp', []);
		}

		public function get(Request $request) // выполняем инъекцию
		{
			$request->session()->flush();

			session(['key'=>'value']);
			$value = session('key');
			
		
			

		// 







			return view('session.pwp', ['val'=>$value]);
		}

	}
?>
