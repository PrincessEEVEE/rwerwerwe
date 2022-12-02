<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class proform extends Controller
	{
		public function form()
		{
			
		}
		
		public function result(Request $request)
		{
			$data = $request->except('pass', 'mail');

			







			return view('proform.pro', ['data' => $data]);
		}

		public function method(Request $request)
		{
			$path = $request->path();

			$url = $request->url();

			$fullurl = $request->fullUrl();

			$query = $request->fullUrlWithQuery(['page'=>'1']);










			return view('proform.pro', ['path'=>$path, 'url'=>$url, 'fullurl'=>$fullurl, 'page'=>$query]);
		}


	}
?>