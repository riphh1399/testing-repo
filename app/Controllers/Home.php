<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
					'title'  => 'covid-19 Nasional',
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