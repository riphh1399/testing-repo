<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('Admin/login');
	}
	public function register()
	{
		return view('Admin/register');
	}

	//--------------------------------------------------------------------

}