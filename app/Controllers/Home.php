<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$nasional = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'),true);
		$prov = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'),true);
		$data = [
					'title'  => 'covid-19 Nasional',
					'nasional' => $nasional, 
					'prov' 	=>  $prov,
					'isi' 	 => 'v_home'
				];
				echo view('layout/v_wrapper',$data);
	// 	return view('Admin/login');
	// }
	// public function register()
	// {
	// 	return view('Admin/register');
	}

	//--------------------------------------------------------------------

}