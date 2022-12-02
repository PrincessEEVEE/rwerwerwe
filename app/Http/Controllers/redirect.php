	<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request; // подключаем класс Request

	class redirect extends Controller
	{
		public function form(Request $request) // выполняем инъекцию
		{
			if($request->input('num')>0 && $request->input('num')<11){
				return redirect('/test/acc');
			}
			else{
				return redirect('/test/red');
				$t = 'неверное число';
			}

			

			return view('redirect.qeq', ['t'=>$t]);
		}

		public function good(Request $request) // выполняем инъекцию
		{
			$q = 'Форма отправлена успешно';
			

			

			return view('redirect.wew', ['q'=>$q]);
		}



		

	}
?>